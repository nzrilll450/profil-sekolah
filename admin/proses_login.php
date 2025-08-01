<?php
session_start();
include '../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password']; 

$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) === 1) {
    $data = mysqli_fetch_assoc($query);
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['admin'] = $data['username'];
    header('Location: dashboard.php');
} else {
    $_SESSION['error'] = "Username atau password salah!";
    header('Location: login.php');
}
?>
