<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Achievement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <!-- this button just tests if the modal pop up correctly. Later, i'll make a change. -->
    <!-- Modal will be pop up when the user achieve the certain point of the carbon emission. -->
    <button type="button" class="btn btn-success" id="shareButton">Share Your Achievement</button>
    <div id="shareModal" class="modal" tabindex="-1" role="dialog" style="display:none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share Your Achievement</h5>
                    <button type="button" class="close" id="closeModal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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

    <script>
    document.getElementById('shareButton').addEventListener('click', function() {
        document.getElementById('shareModal').style.display = 'block';
    });

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
    </script>

</body>

</html>