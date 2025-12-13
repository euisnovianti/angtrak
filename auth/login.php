<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<section class="auth-box">
  <h2>Login</h2>

  <form action="process_login.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" class="btn-primary">Masuk</button>
  </form>
</section>

</body>
</html>
