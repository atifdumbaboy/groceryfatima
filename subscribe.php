<?php
include_once('connection.php');

if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];
    $timestamp = date("Y-m-d H:i:s"); // Current timestamp

    $sql = "INSERT INTO NewsletterSubscriptions (Email, Time) VALUES ('$email', '$timestamp')";

    if ($mysqli->query($sql) === TRUE) {
        $subscriptionMessage = "Subscription successful!";
    } else {
        $subscriptionMessage = "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>
