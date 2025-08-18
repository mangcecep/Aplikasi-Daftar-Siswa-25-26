<?php
require 'connection.php';

$id = $_POST["id"];
$full_name = htmlspecialchars($_POST["full_name"]);
$class = $_POST["classes"];
$major = $_POST["major"];
$gender = $_POST["gender"];

$sql = "UPDATE students SET full_name='$full_name', classes='$class', major='$major', gender='$gender' WHERE id=$id";

if ($connection->query($sql)) {
    header("Location: http://localhost:8000");
    $connection->close();
    die();
}

echo "ERROR " . $sql . "<br/>" . $connection->error;
$connection->close();
