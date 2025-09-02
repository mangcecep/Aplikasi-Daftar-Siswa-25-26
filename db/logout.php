<?php
session_start();
session_destroy();

$_SESSION['LOGOUT_MESSAGE'] = "Logout Success";
header("Location: http://localhost:8000/login.php");
