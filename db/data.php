<?php

require "connection.php";

$students = [];

$sql = "SELECT * FROM students";

$students = mysqli_query($connection, $sql);

$connection->close();
