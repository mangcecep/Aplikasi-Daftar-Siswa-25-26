<?php
session_start();
$title = "Aplikasi Data Siswa | Home";
include "./template/header.php";
include "./db/data.php";
$no = 1;

// destroy the session
if (isset($_SESSION["is_login"]) == false) {
    header("Location: http://localhost:8000/login.php");
}

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="btn btn-danger">
            <a
                class="navbar-brand text-light"
                href="/db/logout.php">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Logout
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/book.php">Book</a>
            </div>
        </div>
    </div>
</nav>

<div class="container border mt-5 p-5">
    <h1 class="text-center">Aplikasi Data Siswa</h1>
    <div class="text-center">
        <a
            class="btn btn-success"
            href="/create-student.php">
            <i class="fa-solid fa-plus"></i>
            Add Student</a>
    </div>

    <?php if (isset($_SESSION['message'])) : ?>
        <p style="color: green"><?= $_SESSION['message'] ?></p>
    <?php endif ?>

    <div class="table mt-5">
        <table class="table table-striped">
            <thead>
                <tr class="table-success">
                    <th class="table-warning">No.</th>
                    <th>Student Name</th>
                    <th class="table-info">Class</th>
                    <th class="table-warning">Major</th>
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
                            <a
                                class="btn btn-danger"
                                href="/db/delete-student.php?id=<?= $student['id'] ?>">
                                <i class="fa-solid fa-trash"></i>
                                Delete</a>
                            <a
                                class="btn btn-warning"
                                href="/update-student.php?id=<?= $student['id'] ?>">
                                <i class="fa-solid fa-edit"></i>
                                update</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "template/footer.php" ?>