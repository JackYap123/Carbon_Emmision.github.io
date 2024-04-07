<?php
include_once("header.php");
include_once("php/config.php");

$servername = "localhost";
$username = "root";
$password = "";
$database = "carbon_emmision";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_SESSION['user_Id'];
$foodTotal = 0;
$transportTotal = 0;
$totalKWH = 0;
$reduction = 0;
$milestoneAchieved = isMilestoneAchieved($id, $conn, $reduction);

$stmt = $conn->prepare("SELECT food_total, transport_total, Total_KHW FROM food_carbon_emission WHERE user_Id = ? ORDER BY date_created DESC LIMIT 1");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $foodTotal = $row['food_total']/ 1000;
    $transportTotal = $row['transport_total'];
    $totalKWH = $row['Total_KHW'] / 1000;
}


$recommendations = generateRecommendations($foodTotal, $transportTotal, $totalKWH);

function generateRecommendations($foodTotal, $transportTotal, $totalKWH) {
    $recommendations = [];
    if ($foodTotal > 4.5) {
        $recommendations[] = "Consider reducing meat consumption and increasing plant-based foods.";
    } else if ($transportTotal > 5.2) {
        $recommendations[] = "Consider using public transportation, biking, or walking.";
    } else if ($totalKWH > 29) {
        $recommendations[] = "Consider reducing unnecessary use of electrical devices and switching to energy-saving products.";
    } else {
        $recommendations[] = "Congratulations! You're already doing a great job at reducing your carbon emissions.";
    }
    return $recommendations;
}

$analysisResults = analyzeData($foodTotal, $transportTotal, $totalKWH);

function analyzeData($foodTotal, $transportTotal, $totalKWH) {
    $insights = [];
    $categories = [
        'Food' => $foodTotal,
        'Transport' => $transportTotal,
        'Electric' => $totalKWH,
    ];

    $highestEmission = max(array_values($categories));
    $mostImpactfulCategory = array_search($highestEmission, $categories);

    $insights['mostImpactfulCategory'] = $mostImpactfulCategory;
    $insights['categories'] = $categories;

    return $insights;
}


function isMilestoneAchieved($userId, $conn, &$reduction) {
    $stmt = $conn->prepare("SELECT food_total, transport_total, Total_KHW, date_created FROM food_carbon_emission WHERE user_Id = ? ORDER BY date_created DESC");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $currentData = null;
    $previousData = null;
    
    if ($row = $result->fetch_assoc()) {
        $currentData = $row;
    }
    if ($row = $result->fetch_assoc()) {
        $previousData = $row;
    }
    
    if ($currentData && $previousData) {
        $currentEmission = $currentData['food_total'] + $currentData['transport_total'] + $currentData['Total_KHW'];
        $previousEmission = $previousData['food_total'] + $previousData['transport_total'] + $previousData['Total_KHW'];
        
        $reduction = ($previousEmission - $currentEmission) / $previousEmission *100;
        
        return $reduction >= 25;
    } else {
        $reduction = 0;
        return false;
    }
}

$milestoneAchieved = isMilestoneAchieved($id, $conn, $reduction);

if ($milestoneAchieved) {
    echo <<<HTML
    <div id="shareModal" class="modal" tabindex="-1" role="dialog" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-success">Congratulations!</h1>
                    <button type="button" class="close" id="closeModal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center"> You have reduced the carbon emissions by 25%.</p>
                    <img src="Image/Achievements_icon.png"
                        style="width:auto; height: 300px;   justify-content: center; display: block; margin: 0 auto;">
                    <h5 class="modal-title">Share Your Achievement</h5>
                    <select class="form-control" id="captionTemplate">
                        <option selected>Choose a caption...</option>
                        <option value="1">Just leveled up in carbon reduction! 🌿 #EcoChampion #Sustainability
                            #GreenLiving</option>
                        <option value="2">Making a difference, one step at a time! 🌍 Reduced my carbon footprint by
                            25%! #EcoWarrior #SustainableLiving</option>
                        <option value="3">Every small action counts in our journey towards a greener planet. Proud of my
                            latest achievement! #GoGreen #EcoFriendly</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" onclick="shareOnSocialMedia('twitter')">Share on
                        Twitter</button>
                    <button type="button" class="btn btn-primary" onclick="shareOnSocialMedia('facebook')">Share on
                        Facebook</button>
                    <button type="button" class="btn btn-secondary" onclick="shareOnSocialMedia('linkedin')">Share on
                        LinkedIn</button>
                </div>
            </div>
        </div>
    </div>
HTML;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon Emmision</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
a {
    color: inherit;
}
</style>

<body>
    <div id="mainContent">
        <div class="text-center mb-5" id="container1">
            <h1 class="head-title">Personalized Recommendations</h1>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div id="insightsContainer" class="p-4 shadow rounded">
                        <h2 class="mb-3">Insights on Your Activities</h2>
                        <p>The most impactful category is:
                            <strong><?php echo $analysisResults['mostImpactfulCategory']; ?></strong>
                        </p>
                        <h4 class="mt-4 mb-2">Recommendations:</h4>
                        <ul>
                            <?php foreach ($recommendations as $recommendation): ?>
                            <li><?php echo htmlspecialchars($recommendation); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        if ($reduction > 0) {
                            echo "<p>Comparing to Yesterday, You have reduced your carbon emissions by " . number_format($reduction, 1) . "%.</p>";
                        } else if ($reduction < 0) {
                            echo "<p>Comparing to Yesterday, You have increased your carbon emissions by " . number_format(abs($reduction), 1) . "%.</p>";
                        } else {
                            echo "<p>Your carbon emissions have not changed from Yesterday.</p>";
                        }
                        ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div id="graphContainer" class="p-4 shadow rounded">
                        <h2 class="mb-3">Today's your result</h2>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Food Emissions
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($foodTotal); ?> kgCO2</h5>
                            <p class="card-text">Total Carbon Emission from Food.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Transport Emissions
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($transportTotal); ?> kgCO2</h5>
                            <p class="card-text">Total Carbon Emission from Transport.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Electric
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($totalKWH); ?> kgCO2</h5>
                            <p class="card-text">Total Carbon Emission from Electric.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>


</html>

<?php
    include_once ("html/footer.html");
?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var categories = <?php echo json_encode($analysisResults['categories']); ?>;
    var labelsWithUnit = Object.keys(categories).map(function(key) {
        return key + ' (kgCO2)';
    });
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labelsWithUnit,
            datasets: [{
                data: Object.values(<?php echo json_encode($analysisResults['categories']); ?>),
                backgroundColor: [
                    'rgba(144, 255, 144, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(75, 255, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            },

        }
    });
});
window.onload = function() {
    document.getElementById('shareModal').style.display = 'block';
}

document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('shareModal').style.display = 'none';
});

function shareOnSocialMedia(platform) {
    var captionIndex = document.getElementById('captionTemplate').value;
    var captionText = '';
    switch (captionIndex) {
        case '1':
            captionText = "Just leveled up in carbon reduction! 🌿 #EcoChampion #Sustainability #GreenLiving";
            break;
        case '2':
            captionText =
                "Making a difference, one step at a time! 🌍 Reduced my carbon footprint by 25%! #EcoWarrior #SustainableLiving";
            break;
        case '3':
            captionText =
                "Every small action counts in our journey towards a greener planet. Proud of my latest achievement! #GoGreen #EcoFriendly";
            break;
    }

    var shareURL = '';
    if (platform === 'twitter') {
        shareURL = `https://twitter.com/intent/tweet?text=${encodeURIComponent(captionText)}`;
    } else if (platform === 'facebook') {
        shareURL = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}`;

    } else if (platform === 'linkedin') {
        shareURL =
            `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(window.location.href)}&title=${encodeURIComponent(captionText)}`;

    }

    window.open(shareURL, '_blank');
}

window.onload = function() {
    document.getElementById('shareModal').style.display = 'block';
    document.getElementById('mainContent').classList.add('blur-background');
}

document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('shareModal').style.display = 'none';
    document.getElementById('mainContent').classList.remove('blur-background');
});
</script>

<style>
.blur-background {
    filter: blur(8px);
}
</style>