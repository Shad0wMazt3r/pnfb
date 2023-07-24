<?php
session_start();

// Replace with your actual username and password
$validUsername = 'root';
$validPassword = 'toor';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["authenticated"] = true;
        header("Location: display_csv.php");
        exit;
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>
