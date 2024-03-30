<?php
// Database connection
include_once("php/config.php");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

try {
    // Check if there has been a submission in the past day
    $yesterday = date('Y-m-d H:i:s', strtotime('-1 day'));
    $sql = "SELECT COUNT(*) AS count FROM food_carbon_submissions WHERE submission_time > '$yesterday'";
    $result = $con->query($sql);

    if ($result === false) {
        throw new Exception("Error executing query: " . $con->error);
    }

    $row = $result->fetch_assoc();
    $count = $row['count'];

    if ($count == 0) {
        // Send notification email using Gmail
        $to = "recipient@example.com";
        $subject = "Form Submission Notification";
        $message = "No form submissions in the past day.";
        $headers = "From: your_email@gmail.com" . "\r\n" .
                   "Reply-To: your_email@gmail.com" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Send email
        $mailSent = mail($to, $subject, $message, $headers);

        if (!$mailSent) {
            throw new Exception("Error sending email.");
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$con->close();
?>
