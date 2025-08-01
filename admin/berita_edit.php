<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
include '../koneksi/koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM berita WHERE id_berita=$id");
$data = mysqli_fetch_assoc($result);
$gambarLama = $data['gambar'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];

  // Proses Gambar
  if ($_FILES['gambar']['name']) {
    $folder = "../assets/img/berita/";
    $gambarBaru = uniqid() . '-' . basename($_FILES['gambar']['name']);
    $targetPath = $folder . $gambarBaru;
    move_uploaded_file($_FILES['gambar']['tmp_name'], $targetPath);
  } else {
    $gambarBaru = $gambarLama;
  }

  mysqli_query($con, "UPDATE berita SET judul='$judul', isi='$isi', tanggal='$tanggal', gambar='$gambarBaru' WHERE id_berita=$id");
  header('Location: berita_crud.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Edit Berita - SMKN 64 Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    :root {
      --primary: #4e944f;
      --secondary: #a0e9af;
      --accent: #009688;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(-45deg, #d4fc79, #96e6a1, #7fffd4, #81ecec);
      background-size: 400% 400%;
      animation: gradientFlow 15s ease infinite;
      padding-top: 70px;
    }

    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .navbar {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .navbar-brand {
      font-weight: 600;
      color: var(--primary);
      font-size: 1.5rem;
    }

    .form-card {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    .btn-primary {
      background: linear-gradient(to right, #00b894, #00cec9);
      border: none;
      font-weight: 600;
      padding: 10px 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px #00cec9;
      transition: 0.3s;
    }

    .btn-primary:hover {
      transform: scale(1.05);
      background: #00b894;
    }

    .btn-secondary {
      border-radius: 10px;
    }

    h3 {
      font-weight: 600;
      margin-bottom: 30px;
      color: var(--primary);
    }

    .img-preview {
      max-width: 200px;
      border-radius: 10px;
      margin-bottom: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    @media (max-width: 576px) {
      .form-card {
        padding: 25px 20px;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php"><i class="bi bi-speedometer2"></i> Dashboard Admin</a>
    <div class="ms-auto">
      <a href="logout.php" class="btn btn-sm btn-outline-danger"><i class="bi bi-box-arrow-right me-1"></i> Logout</a>
    </div>
  </div>
</nav>

<!-- Form -->
<div class="container mt-5" data-aos="zoom-in">
  <div class="form-card">
    <h3><i class="bi bi-pencil-square me-2"></i>Edit Berita</h3>
    <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Judul Berita</label>
        <input type="text" name="judul" class="form-control" required value="<?= htmlspecialchars($data['judul']) ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Isi Berita</label>
        <textarea name="isi" class="form-control" rows="5" required><?= htmlspecialchars($data['isi']) ?></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required value="<?= $data['tanggal'] ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Gambar Saat Ini</label><br>
        <?php if ($data['gambar']) : ?>
          <img src="../assets/img/berita/<?= $data['gambar'] ?>" class="img-preview" alt="Gambar Berita">
        <?php else : ?>
          <p class="text-muted">Belum ada gambar.</p>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label class="form-label">Ganti Gambar (Opsional)</label>
        <input type="file" name="gambar" class="form-control">
        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
      </div>

      <div class="d-flex flex-wrap gap-2">
        <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle me-1"></i> Simpan Perubahan</button>
        <a href="berita_crud.php" class="btn btn-secondary"><i class="bi bi-arrow-left-circle"></i> Batal</a>
      </div>
    </form>
  </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
</body>
</html>