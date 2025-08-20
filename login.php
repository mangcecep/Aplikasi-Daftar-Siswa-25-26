<?php
session_start();
$title = "Aplikasi Data Siswa | LOGIN";
include "./template/header.php";

if (isset($_SESSION["is_login"]) == true) {
    header("Location: http://localhost:8000");
}

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

        <?php if (isset($_SESSION["VALIDATION_INPUT"])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo $_SESSION["VALIDATION_INPUT"];
                session_unset();
                ?>
            </div>
        <?php } else if (isset($_SESSION["VALIDATION_EMAIL_EXIST"])) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["VALIDATION_EMAIL_EXIST"] ?>
            </div>
        <?php session_unset();
        } else if (isset($_SESSION["WRONG_PASSWORD"])) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION["WRONG_PASSWORD"] ?>
            </div>
        <?php session_unset();
        } else if (isset($_SESSION["AUTH_SUCCESS"])) { ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION["AUTH_SUCCESS"] ?>
            </div>
        <?php } ?>
        <form method="post" action="./db/auth.php">
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