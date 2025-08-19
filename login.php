<?php
session_start();
$title = "Aplikasi Data Siswa | LOGIN";
include "./template/header.php";
?>

<section class="container pt-5">
    <div class="card p-5">
        <h1>HALAMAN LOGIN</h1>
        <?php if (isset($_SESSION["REGISTER_SUCCESS"])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION["REGISTER_SUCCESS"] ?>
            </div>
        <?php session_unset();
        endif ?>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="please type your email here.."
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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

            <button type="submit" class="btn btn-primary">Submit</button>
            <p>Don't have an account?
                <a href="/register.php">
                    register
                </a>
            </p>
        </form>
    </div>
</section>

<?php include "./template/footer.php"; ?>