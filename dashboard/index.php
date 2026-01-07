<?php
session_start();
// Cek apakah user sudah login
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | ANGGO</title>
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Dashboard */
        .dashboard-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
        }
        .welcome-banner {
            padding: 120px 20px;
            text-align: center;
            color: white;
            background: linear-gradient(
            rgba(0, 0, 0, 0.45),
            rgba(0, 0, 0, 0.45)),
            url('../assets/img/angkot1.png');
            background-size: cover;
            background-position: center;
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .menu-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            text-decoration: none;
            color: #333;
            border: 1px solid #eee;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            border-color: #667eea;
        }
        .menu-card h3 {
            margin-top: 10px;
            color: #667eea;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="navbar-conatiner">
            <div class="logo">
                <img src="../assets/img/anggo.png" alt="Anggo Logo">
                <span>ANGGO | Agkot Garut Online </span>
            </div>
            <div class="nav-auth">
                <span style="color: white; margin-right: 15px;">Halo, <?= htmlspecialchars($_SESSION['user']['nama']); ?></span>
                <a href="../auth/logout.php" class="btn-login" style="background: white; color: #667eea;">Logout</a>
            </div>
        </div>
    </nav>

    <div class="dashboard-container">
        
        <div class="welcome-banner">
            <h1>👋 Selamat Datang, <?= htmlspecialchars($_SESSION['user']['nama']); ?>!</h1>
            <p>Mau kemana hari ini? Yuk cari rute angkotmu sekarang.</p>
        </div>

        <div class="dashboard-grid">
            
            <a href="#" class="menu-card">
                <div style="font-size: 40px;">🚍</div>
                <h3>Cari Rute Angkot</h3>
                <p>Temukan angkot terdekat dan rute terbaik.</p>
            </a>

            <a href="profil.php" class="menu-card">
                <div style="font-size: 40px;">👤</div>
                <h3>Profil Saya</h3>
                <p>Lihat dan edit data diri kamu.</p>
            </a>

            <a href="../help.php" class="menu-card">
                <div style="font-size: 40px;">❓</div>
                <h3>Bantuan</h3>
                <p>Pusat bantuan dan layanan pelanggan.</p>
            </a>

        </div>
    </div>

</body>
</html>