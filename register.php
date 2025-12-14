<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Akun | ANGGO</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'partials/navbar.php'; ?>

<section class="auth-box">
  <h2>Buat Akun Baru</h2>

  <form action="auth/process_register.php" method="POST">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" class="btn-primary">Daftar</button>
    <p>Sudah punya akun? <a href="login.php">Masuk</a></p>
  </form>
</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>