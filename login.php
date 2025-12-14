<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | ANGGO</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'partials/navbar.php'; ?>

<section class="auth-box">
  <h2>Masuk ke Akun Anda</h2>

  <form action="auth/process_login.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" class="btn-primary">Masuk</button>
    <p>Belum punya akun? <a href="register.php">Daftar Sekarang</a></p>
  </form>
</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>