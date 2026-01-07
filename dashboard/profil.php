<?php
// Proteksi halaman - harus login dulu
include '../cekLogin.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil | ANGGO</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div style="max-width: 800px; margin: 50px auto; padding: 20px;">
    <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
        <h1 style="color: #667eea; margin-bottom: 30px;">Profil Saya</h1>
        
        <div style="margin-bottom: 20px;">
            <label style="display: block; color: #666; margin-bottom: 5px;">Nama:</label>
            <p style="font-size: 18px; font-weight: 600;"><?= htmlspecialchars($_SESSION['user']['nama']); ?></p>
        </div>
        
        <div style="margin-bottom: 20px;">
            <label style="display: block; color: #666; margin-bottom: 5px;">Email:</label>
            <p style="font-size: 18px; font-weight: 600;"><?= htmlspecialchars($_SESSION['user']['email']); ?></p>
        </div>
        
        <div style="margin-top: 30px; display: flex; gap: 15px;">
            <a href="index.php" class="btn-primary">Kembali ke Dashboard</a>
            <a href="../auth/logout.php" class="btn-secondary" style="background: transparent; color: #667eea; border: 2px solid #667eea; padding: 10px 25px;">Logout</a>
        </div>
    </div>
</div>

</body>
</html>