<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
include '../koneksi/koneksi.php';

$pesan_error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];

  // Upload gambar
  $gambar = '';
  if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
    $extValid = ['jpg', 'jpeg', 'png', 'webp'];
    $ukuranMax = 2 * 1024 * 1024; // 2MB
    $namaFile = $_FILES['gambar']['name'];
    $tmpFile = $_FILES['gambar']['tmp_name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $ekstensi = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    if (!in_array($ekstensi, $extValid)) {
      $pesan_error = "Hanya file JPG, JPEG, PNG, atau WEBP yang diizinkan.";
    } elseif ($ukuranFile > $ukuranMax) {
      $pesan_error = "Ukuran gambar maksimal 2MB.";
    } else {
      $folder = '../assets/img/berita/';
      if (!file_exists($folder)) {
        mkdir($folder, 0777, true); // Buat folder kalau belum ada
      }

      $namaBaru = time() . '_' . preg_replace('/[^a-zA-Z0-9.]/', '', $namaFile);
      $pathGambar = $folder . $namaBaru;

      if (move_uploaded_file($tmpFile, $pathGambar)) {
        $gambar = $namaBaru;
      } else {
        $pesan_error = "Gagal upload gambar.";
      }
    }
  }

  // Simpan data ke database jika tidak ada error
  if ($pesan_error === '') {
    mysqli_query($con, "INSERT INTO berita (judul, isi, tanggal, gambar) 
                        VALUES ('$judul', '$isi', '$tanggal', '$gambar')");
    header('Location: berita_crud.php');
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .img-preview {
      width: 100%;
      max-height: 300px;
      object-fit: contain;
      margin-top: 10px;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-4">Tambah Berita</h3>

  <?php if ($pesan_error): ?>
    <div class="alert alert-danger"><?= $pesan_error ?></div>
  <?php endif; ?>

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Isi</label>
      <textarea name="isi" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
      <label>Tanggal</label>
      <input type="date" name="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Gambar Berita</label>
      <input type="file" name="gambar" class="form-control" accept="image/*" onchange="previewGambar(this)">
      <img id="preview" class="img-preview d-none">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="berita_crud.php" class="btn btn-secondary">Batal</a>
  </form>
</div>

<script>
  function previewGambar(input) {
    const preview = document.getElementById('preview');
    const file = input.files[0];

    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.classList.remove('d-none');
      }
      reader.readAsDataURL(file);
    }
  }
</script>
</body>
</html>