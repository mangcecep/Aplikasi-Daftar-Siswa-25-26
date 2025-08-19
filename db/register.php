<?php
session_start();

require 'connection.php';

$full_name = htmlspecialchars($_POST["full_name"]);
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirmation = $_POST["password_confirmation"];

if (
    $full_name == "" ||
    $email == "" ||
    $password == "" ||
    $password_confirmation == ""
) {
    $_SESSION["VALIDATION_INPUT"] = "All fields must be filled";
    header("Location: http://localhost:8000/register.php");
    return;
}

if (
    $password != $password_confirmation
) {
    $_SESSION["VALIDATION_PASSWORD"] = "password does'nt match!";
    header("Location: http://localhost:8000/register.php");
    return;
}

// CEK APAKAH EMAIL ADA DI DB APA TIDAK
$cekEmail = "SELECT email FROM users WHERE email='$email'";

if ($connection->query($cekEmail)->num_rows > 0) {
    $_SESSION["VALIDATION_EMAIL_EXIST"] = "email has been registered!";
    header("Location: http://localhost:8000/register.php");
    return;
}


$password_hashed = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users(
    full_name,
    email,
    password
) VALUES('$full_name', '$email',  '$password_hashed')";

if ($connection->query($sql)) {
    $_SESSION['REGISTER_SUCCESS'] = "Register success! please login";
    header("Location: http://localhost:8000/login.php");
    $connection->close();
    die();
}

echo "ERROR " . $sql . "<br/>" . $connection->error;
$connection->close();
