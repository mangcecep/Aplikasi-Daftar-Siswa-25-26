<?php
session_start();

$title = "CREATE BOOK DATA";
include "./template/header.php";

if (isset($_SESSION["is_login"]) == false) {
    header("Location: http://localhost:8000/login.php");
}

print_r(["is login" => isset($_SESSION["is_login"])]);


?>

<h1>Tambah Data Buku</h1>
<a href="/book.php">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="./db/create-book.php">
    <input name="title" placeholder="Title" /><br />
    <input name="author" placeholder="Author" /><br />

    <button type="submit">Submit</button>
</form>

</body>

</html>