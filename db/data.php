<?php

require 'connection.php';

$students = [];
$books = [];
$sql = "SELECT * FROM students";
$sql_book = "SELECT * FROM books";

$students = mysqli_query($connection, $sql);
$books = mysqli_query($connection, $sql_book);

$connection->close();
