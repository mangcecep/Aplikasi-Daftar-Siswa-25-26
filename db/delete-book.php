<?php
require 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id=$id";

if ($connection->query($sql)) {
    header("Location: http://localhost:8000/book.php");
    $connection->close();
    die();
}

echo "ERROR " . $sql . "<br/>" . $connection->error;
$connection->close();
