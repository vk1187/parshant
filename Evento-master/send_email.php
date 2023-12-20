<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "prashant.kumar7@evalueserve.com"; // Replace with the recipient's email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    mail($to, $subject, $message, $headers);

    // You can return a response to the JavaScript code if needed
    echo "Email sent successfully!";
}
?>
