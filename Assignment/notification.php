<?php
// Connect to the database
// Include necessary files

// Query to get users who haven't logged their activities today
$sql = "SELECT * FROM users WHERE id NOT IN (SELECT DISTINCT user_id FROM daily_logs WHERE date = CURDATE())";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $to = $row['email'];
        $subject = 'Reminder: Log your activities today';
        $message = 'Dear '.$row['username'].",\n\n";
        $message .= "This is a friendly reminder to log your activities for today.\n";
        $message .= "Please visit our website or app to log your activities.\n\n";
        $message .= "Thank you,\nYour Company";

        // Send email
        $headers = 'From: your-email@example.com' . "\r\n" .
                   'Reply-To: your-email@example.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "Reminder sent to: ".$to."\n";
        } else {
            echo "Failed to send reminder to: ".$to."\n";
        }
    }
} else {
    echo "No users found who haven't logged their activities today.\n";
}

$conn->close();
?>
