<?php
$title = "Aplikasi Data Siswa | Home";
include "./template/header.php";
include "./db/data.php";
$no = 1;
?>

<h1>Aplikasi Data Siswa</h1>
<a href="/create-student.php">Add Student</a>

<?php if (isset($_SESSION['message'])) : ?>
    <p style="color: green"><?= $_SESSION['message'] ?></p>
<?php endif ?>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Student Name</th>
            <th>Class</th>
            <th>Major</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $student['full_name'] ?></td>
                <td><?= $student['classes'] ?></td>
                <td><?= $student['major'] ?></td>
                <td><?= $student['gender'] ?></td>
                <td>
                    <a href="/db/delete-student.php?id=<?= $student['id'] ?>">Delete</a>
                    <a href="/update-student.php?id=<?= $student['id'] ?>">update</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>

</html>