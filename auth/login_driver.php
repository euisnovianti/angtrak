<?php
session_start();
include '../config/database.php';

if (isset($_POST['login'])) {
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];

    // Cari supir berdasarkan No HP
    $result = mysqli_query($conn, "SELECT * FROM drivers WHERE no_hp = '$no_hp'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Cek Password
        if (password_verify($password, $row['password'])) {
            // SET SESSION KHUSUS DRIVER
            $_SESSION['driver_id'] = $row['id']; // Simpan ID Supir
            $_SESSION['driver_nama'] = $row['nama'];
            $_SESSION['role'] = 'driver'; // Penanda kalau ini supir

            // Lempar ke Dashboard Supir
            header("Location: ../dashboard/dashboard_supir.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Supir</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login Khusus Supir</h2>
        <?php if(isset($error)) : ?>
            <p style="color: red; font-style: italic;">No HP / Password salah!</p>
        <?php endif; ?>

        <form method="POST">
            <label>Nomor HP:</label><br>
            <input type="number" name="no_hp" required><br><br>
            
            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>
            
            <button type="submit" name="login">Masuk</button>
        </form>
        <p>Belum jadi supir? <a href="register_driver.php">Daftar</a></p>
    </div>
</body>
</html>