<?php

require 'connection.php';

$title = htmlspecialchars($_POST["title"]);
$author = htmlspecialchars($_POST["author"]);

$sql = "INSERT INTO books(
    title,
    author
) VALUES('$title', '$author')";

if ($connection->query($sql)) {
    session_start();
    $_SESSION['message'] = "Book data has created successfully!";
    header("Location: http://localhost:8000/book.php");
    $connection->close();
    die();
}

echo "ERROR " . $sql . "<br/>" . $connection->error;
$connection->close();
