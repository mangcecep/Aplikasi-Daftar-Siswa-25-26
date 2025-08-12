<?php
require 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";

$students = mysqli_query($connection, $sql);

$connection->close();
