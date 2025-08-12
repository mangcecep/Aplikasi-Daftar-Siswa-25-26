<?php

require 'connection.php';

$full_name = htmlspecialchars($_POST["full_name"]);
$class = $_POST["classes"];
$major = $_POST["major"];
$gender = $_POST["gender"];

$sql = "INSERT INTO students(
    full_name,
    classes,
    major,
    gender
) VALUES('$full_name', '$class', '$major', '$gender')";

if ($connection->query($sql)) {
    header("Location: http://localhost:8000");
    $connection->close();
    die();
}

echo "ERROR " . $sql . "<br/>" . $connection->error;
$connection->close();
