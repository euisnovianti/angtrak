<?php
include '../config/database.php';

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Password di-enkripsi

    // Cek dulu apakah No HP sudah terdaftar
    $cek = mysqli_query($conn, "SELECT * FROM drivers WHERE no_hp = '$no_hp'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Nomor HP sudah terdaftar!');</script>";
    } else {
        // Masukkan ke tabel drivers
        $sql = "INSERT INTO drivers (nama, no_hp, password) VALUES ('$nama', '$no_hp', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Pendaftaran Berhasil! Silakan Login.'); window.location='login_driver.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Jadi Supir</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Pendaftaran Supir Angkot</h2>
        <form method="POST">
            <label>Nama Lengkap:</label><br>
            <input type="text" name="nama" required><br><br>
            
            <label>Nomor HP:</label><br>
            <input type="number" name="no_hp" required><br><br>
            
            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>
            
            <button type="submit" name="daftar">Daftar Sekarang</button>
        </form>
        <p>Sudah punya akun? <a href="login_driver.php">Login di sini</a></p>
    </div>
</body>
</html>