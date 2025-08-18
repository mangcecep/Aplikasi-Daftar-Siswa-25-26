<?php
$title = "List Book | Home";
include "./template/header.php";
include "./db/data.php";
$no = 1;
?>

<h1>List Book</h1>
<a href="/create-book.php">Add Book</a>

<?php if (isset($_SESSION['message'])) : ?>
    <p style="color: green"><?= $_SESSION['message'] ?></p>
<?php endif ?>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $book['title'] ?></td>
                <td><?= $book['author'] ?></td>
                <td>
                    <a href="/db/delete-book.php?id=<?= $book['id'] ?>">Delete</a>
                    <a href="/update-book.php?id=<?= $book['id'] ?>">update</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>

</html>