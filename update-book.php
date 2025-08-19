<?php

if (isset($_SESSION["is_login"]) == false) {
    header("Location: http://localhost:8000/login.php");
}

$title = "UPDATE BOOK DATA";
include "./template/header.php";
include "./db/detail-book.php";


?>

<h1>Update Data Buku</h1>
<a href="/book.php">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="./db/update-book.php">
    <?php foreach ($books as $book) : ?>
        <input
            type="hidden"
            name="id"
            value="<?= $book['id'] ?>" /><br />
        <input
            name="title"
            placeholder="Title"
            value="<?= $book['title'] ?>" /><br />
        <input
            name="author"
            placeholder="Author"
            value="<?= $book['author'] ?>" /><br />
    <?php endforeach ?>
    <button type="submit">Submit</button>
</form>

</body>

</html>