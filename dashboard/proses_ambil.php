<?php
session_start();
include '../config/database.php';

// 1. Cek apakah ada ID request yang dikirim?
if (isset($_GET['id'])) {
    
    $id_request = $_GET['id'];
    
    // PENTING: Kita butuh ID Supir yang login. 
    // Asumsi: Saat login supir, kamu menyimpan id-nya di session 'user_id' atau 'driver_id'.
    // Ganti 'user_id' di bawah ini sesuai nama session login-mu.
    $id_supir = $_SESSION['driver_id']; 

    // 2. Siapkan perintah update
    // Kita ubah status jadi 'dijemput' DAN masukkan id supir yang mengambil
    $sql = "UPDATE ride_requests 
            SET status = 'dijemput', driver_id = '$id_supir' 
            WHERE id = '$id_request'";

    // 3. Eksekusi
    if (mysqli_query($conn, $sql)) {
        // Kalau berhasil, kembalikan ke dashboard
        echo "<script>
                alert('Penumpang berhasil diambil! Segera jemput.');
                document.location.href = 'dashboard_supir.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    // Kalau orang coba buka file ini tanpa ID, tendang balik
    header("Location: dashboard_supir.php");
}
?>