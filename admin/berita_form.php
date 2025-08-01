<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
include '../koneksi/koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$edit = false;

if ($id) {
  $edit = true;
  $result = mysqli_query($con, "SELECT * FROM berita WHERE id=$id");
  $data = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $tanggal = $_POST['tanggal'];

  if ($edit) {
    mysqli_query($con, "UPDATE berita SET judul='$judul', isi='$isi', tanggal='$tanggal' WHERE id=$id");
  } else {
    mysqli_query($con, "INSERT INTO berita (judul, isi, tanggal) VALUES ('$judul', '$isi', '$tanggal')");
  }

  header('Location: berita_crud.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $edit ? 'Edit' : 'Tambah' ?> Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-4"><?= $edit ? 'Edit' : 'Tambah' ?> Berita</h3>
  <form method="POST">
    <div class="mb-3">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control" required value="<?= $edit ? $data['judul'] : '' ?>">
    </div>
    <div class="mb-3">
      <label>Isi</label>
      <textarea name="isi" class="form-control" rows="5" required><?= $edit ? $data['isi'] : '' ?></textarea>
    </div>
    <div class="mb-3">
      <label>Tanggal</label>
      <input type="date" name="tanggal" class="form-control" required value="<?= $edit ? $data['tanggal'] : '' ?>">
    </div>
    <button class="btn btn-primary"><?= $edit ? 'Update' : 'Simpan' ?></button>
    <a href="berita_crud.php" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>
