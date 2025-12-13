<?php
session_start();
include "../config/database.php";

$email    = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$user   = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['user']  = $user;

    header("Location: ../dashboard/index.php");
} else {
    echo "Email atau password salah!";
}
?>
