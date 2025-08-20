<?php

session_start();

require 'connection.php';

$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "" || $password == "") {
    $_SESSION["VALIDATION_INPUT"] = "All fields must be filled";
    header("Location: http://localhost:8000/login.php");
    die();
}

// CEK EMAIL ADA DI DB ATAU TIDAK
$cekUSER = "SELECT * FROM users WHERE email='$email'";
$user = mysqli_query($connection, $cekUSER);

if ($connection->query($cekUSER)->num_rows == 0) {
    $_SESSION["VALIDATION_EMAIL_EXIST"] = "email has not been registered!";
    header("Location: http://localhost:8000/login.php");
    die();
}

// CEK PASSWORD
$auth = $user->fetch_assoc();

if (password_verify($password, $auth['password'])) {
    $_SESSION["AUTH_SUCCESS"] = "login success!";
    $_SESSION["is_login"] = true;
    header("Location: http://localhost:8000/student.php");
    return;
}

$_SESSION["WRONG_PASSWORD"] = "wrong password!";
header("Location: http://localhost:8000/login.php");
