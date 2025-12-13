<?php
include "../config/database.php";

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (nama, email, password) 
          VALUES ('$nama', '$email', '$password')";

if (mysqli_query($conn, $query)) {
    header("Location: login.php");
} else {
    echo "Gagal daftar!";
}
?>
