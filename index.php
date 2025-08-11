<?php
$title = "| HOME";
require "./template/header.php";
require "./db/data.php";
$no = 1;
?>

<h1>Aplikasi Daftar Siswa Tahun Ajaran 2025 / 2026</h1>
<a
    class="button"
    href="/add-student">Add Student</a>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Major</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?= $student['full_name'] ?></td>
                <td><?= $student['gender'] ?></td>
                <td><?= $student['classes'] ?></td>
                <td><?= $student['major'] ?></td>
                <td>
                    <a
                        class="update-button"
                        href="/update.php">
                        Update
                    </a>
                    <a
                        class="delete-button"
                        href="/delete.php">
                        Delete
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include "./template/footer.php" ?>