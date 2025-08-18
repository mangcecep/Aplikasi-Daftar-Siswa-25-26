<?php
require 'connection.php';

$id = $_POST["id"];
$title = htmlspecialchars($_POST["title"]);
$author = htmlspecialchars($_POST["author"]);

$sql = "UPDATE books SET title='$title', author='$author' WHERE id=$id";

if ($connection->query($sql)) {
    header("Location: http://localhost:8000/book.php");
    $connection->close();
    die();
}

echo "ERROR " . $sql . "<br/>" . $connection->error;
$connection->close();
