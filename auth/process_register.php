<?php
include "../config/database.php";

// Validasi input
if (!isset($_POST['nama']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    header("Location: /register.php?error=empty");
    exit;
}

$nama     = mysqli_real_escape_string($conn, $_POST['nama']);
$email    = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Cek apakah email sudah terdaftar
$check_query = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $check_query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$check_result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($check_result) > 0) {
    // Email sudah terdaftar
    header("Location: ../register.php?error=exists");
    exit;
}

// Insert user baru
$query = "INSERT INTO users (nama, email, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $password);

if (mysqli_stmt_execute($stmt)) {
    header("Location: /login.php?success=registered");
    exit;
} else {
    header("Location: /register.php?error=failed");
    exit;
}
?>