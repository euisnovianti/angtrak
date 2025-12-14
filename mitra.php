<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Mitra Pengemudi | ANGGO</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'partials/navbar.php'; ?>

<section class="page-header">
  <h1>Gabung Menjadi Mitra</h1>
  <p>Bersama kita modernisasi angkot Indonesia.</p>
</section>

<section class="mitra-content">
  <div class="mitra-info">
    <h2>Kenapa Bergabung?</h2>
    <ul>
      <li>🚍 Angkot lebih mudah ditemukan penumpang</li>
      <li>📍 Informasi rute & trayek lebih jelas</li>
      <li>⭐ Rating & kepercayaan penumpang</li>
      <li>📈 Peluang penumpang lebih banyak</li>
    </ul>
  </div>

  <div class="mitra-form">
    <h2>Form Pendaftaran Mitra</h2>
    <form action="process_mitra.php" method="POST">
      <input type="text" name="nama" placeholder="Nama Pengemudi" required>
      <input type="text" name="nomor_angkot" placeholder="Nomor Angkot" required>
      <input type="text" name="trayek" placeholder="Trayek Angkot" required>
      <input type="tel" name="no_hp" placeholder="Nomor HP" required>
      <button type="submit" class="btn-primary">Daftar Mitra</button>
    </form>
  </div>
</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>