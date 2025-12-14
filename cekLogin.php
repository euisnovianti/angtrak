<?php

// Mulai session jika belum
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Cek apakah user sudah login
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    //  belum login ke halaman login
    header("Location: ../login.php");
    exit;
}
// lanjutkan ke halaman yang diminta
?>