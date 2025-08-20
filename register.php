<?php
session_start();
$title = "Aplikasi Data Siswa | REGISTER";
include "./template/header.php";

if (isset($_SESSION["is_login"]) == true) {
    header("Location: http://localhost:8000");
}
?>

<section class="container pt-5">
    <div class="card p-5">
        <h1>HALAMAN REGISTER</h1>

        <?php if (isset($_SESSION["VALIDATION_INPUT"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["VALIDATION_INPUT"] ?>
            </div>

        <?php session_unset();
        endif ?>

        <?php if (isset($_SESSION["VALIDATION_EMAIL_EXIST"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["VALIDATION_EMAIL_EXIST"] ?>
            </div>

        <?php session_unset();
        endif ?>

        <?php if (isset($_SESSION["VALIDATION_SUCCESS"])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION["VALIDATION_SUCCESS"] ?>
            </div>
        <?php session_unset();
        endif ?>

        <?php if (isset($_SESSION["VALIDATION_PASSWORD"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["VALIDATION_PASSWORD"] ?>
            </div>
        <?php session_unset();
        endif ?>

        <form action="./db/register.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputFullName" class="form-label">Full Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="full_name"
                    placeholder="please type your full name here.."
                    id="exampleInputFullName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="please type your email here.."
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label
                    for="exampleInputPassword1"
                    class="form-label">Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="********"
                    class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label
                    for="exampleInputPassword2"
                    class="form-label">Password Confirmation</label>
                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="********"
                    class="form-control" id="exampleInputPassword2">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <p>Have an account?
                <a href="/login.php">
                    login
                </a>
            </p>
        </form>
    </div>
</section>

<?php include "./template/footer.php"; ?>