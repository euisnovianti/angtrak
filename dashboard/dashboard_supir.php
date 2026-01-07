<?php
include '../config/database.php'; 
$sql = "SELECT * FROM ride_requests WHERE status = 'menunggu'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Supir - Angtrak</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    
    <nav>
        <h2>Area Supir</h2>
        <a href="../auth/logout.php">Logout</a>
    </nav>

    <div class="container">
        <h3>Daftar Penumpang Menunggu</h3>
        
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: left;">
            <thead>
                <tr>
                    <th>Lokasi Jemput</th>
                    <th>Waktu Request</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= htmlspecialchars($row['lokasi_jemput']); ?></td>
                        <td><?= $row['waktu_request']; ?></td>
                        <td>
                            <a href="proses_ambil.php?id=<?= $row['id']; ?>">
                                <button type="button">Ambil Penumpang</button>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">Belum ada penumpang.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>