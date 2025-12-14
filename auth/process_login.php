<?php
session_start();
include "../config/database.php";

// Validasi input
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    header("Location: ../login.php?error=empty");
    exit;
}

$email    = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

// Query dengan prepared statement untuk mencegah SQL injection
$query = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    // Login berhasil
    $_SESSION['login'] = true;
    $_SESSION['user']  = [
        'id' => $user['id'],
        'nama' => $user['nama'],
        'email' => $user['email']
    ];

    header("Location: ../dashboard/index.php");
    exit;
} else {
    // Login gagal
    header("Location: ../login.php?error=invalid");
    exit;
}
?>