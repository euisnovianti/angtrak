<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Akun</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<section class="auth-box">
  <h2>Daftar Akun</h2>

  <form action="process_register.php" method="POST">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" class="btn-primary">Daftar</button>
    <p>Sudah punya akun? <a href="login.php">Masuk</a></p>
  </form>
</section>

</body>
</html>
