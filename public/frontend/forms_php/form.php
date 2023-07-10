<?php
// start the session
session_start();

// retrieve email and password from session
$email = $_SESSION['email'];
$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';

// set recipient email address
$to = 'arhamweb123@gmail.com';

// set subject and message
$subject = 'Example subject';
$message = 'This is an example message.';

// set headers
$headers = array(
    'From: ' . $email,
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion()
);

// send email
if (mail($to, $subject, $message, implode("\r\n", $headers), '-f' . $email)) {
    echo 'Email sent successfully.';
} else {
    echo 'Email could not be sent. Error: ' . error_get_last()['message'];
}
?>
