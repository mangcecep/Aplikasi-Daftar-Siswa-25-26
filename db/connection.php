<?php

$server = 'localhost';
$username = 'root';
$password = 'JanganLupa321!';
$db_name = 'student_data_app';

$connection = new mysqli(
    $server,
    $username,
    $password,
    $db_name
);

if ($connection->connect_error) {
    die("connection failed: " . $connection->connect_error);
}
