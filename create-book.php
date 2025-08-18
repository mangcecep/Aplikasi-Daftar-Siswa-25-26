<?php
$title = "CREATE BOOK DATA";
include "./template/header.php";
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