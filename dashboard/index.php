<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
}
?>

<h1>Selamat Datang, <?= $_SESSION['user']['nama']; ?></h1>
<a href="../auth/logout.php">Logout</a>
