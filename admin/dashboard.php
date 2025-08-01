<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --soft-green: #d1f1c9;
      --dark-green: #4e944f;
      --shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
      padding-top: 70px;
    }

    .navbar {
      background-color: #fff;
      box-shadow: var(--shadow);
    }

    .navbar-brand {
      font-weight: 600;
      color: var(--dark-green) !important;
    }

    .dashboard-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: var(--shadow);
      padding: 40px;
      margin-top: 40px;
    }

    .btn-logout {
      background-color: var(--soft-green);
      color: black;
      border: none;
      border-radius: 12px;
      padding: 10px 25px;
    }

    .btn-logout:hover {
      background-color: var(--dark-green);
      color: white;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Dashboard Admin</a>
    <div class="d-flex">
      <a href="logout.php" class="btn btn-logout">Logout</a>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container">
  <div class="dashboard-card text-center">
    <h2 class="mb-3">Halo, <?= $_SESSION['admin']; ?> 👋</h2>
    <p class="lead">Selamat datang di <strong>Dashboard Admin</strong> SMKN 64 Jakarta.</p>
    <hr class="my-4">
    <p>Di sini kamu bisa mengelola data <strong>berita sekolah</strong>, melihat daftar, menambahkan, mengedit, dan menghapus informasi penting yang akan tampil di halaman publik.</p>
    <a href="../admin/berita_crud.php" class="btn btn-success mt-3">Kelola Berita Sekarang</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
