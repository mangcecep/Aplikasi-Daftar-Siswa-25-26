<?php
require 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if ($connection->query($sql)) {
    header("Location: http://localhost:8000");
    $connection->close();
    die();
}

echo "ERROR " . $sql . "<br/>" . $connection->error;
$connection->close();
