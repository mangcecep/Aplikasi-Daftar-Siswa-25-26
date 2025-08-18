<?php
require 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM books WHERE id=$id";

$books = mysqli_query($connection, $sql);

$connection->close();
