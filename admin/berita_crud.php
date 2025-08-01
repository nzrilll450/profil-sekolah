<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
include '../koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Berita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .thumbnail {
      width: 100px;
      height: 75px;
      object-fit: cover;
      border-radius: 5px;
    }
    .table td, .table th {
      vertical-align: middle;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-4">Daftar Berita</h3>
  <a href="berita_tambah.php" class="btn btn-success mb-3">+ Tambah Berita</a>

  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <thead class="table-light text-center">
        <tr>
          <th>No</th>
          <th>Thumbnail</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $data = mysqli_query($con, "SELECT * FROM berita ORDER BY tanggal DESC");
        while ($row = mysqli_fetch_assoc($data)) :
          $gambar = !empty($row['gambar']) ? "../assets/img/berita/" . $row['gambar'] : "https://via.placeholder.com/100x75?text=No+Image";
        ?>
        <tr>
          <td class="text-center"><?php echo $no++; ?></td>
          <td class="text-center">
            <img src="<?php echo $gambar; ?>" class="thumbnail" alt="Gambar Berita">
          </td>
          <td><?php echo $row['judul']; ?></td>
          <td class="text-center"><?php echo $row['tanggal']; ?></td>
          <td class="text-center">
            <a href="berita_edit.php?id=<?php echo $row['id_berita']; ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="berita_delete.php?id=<?php echo $row['id_berita']; ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <!-- Tombol Navigasi -->
  <div class="mt-4">
    <a href="dashboard.php" class="btn btn-secondary">⬅ Kembali ke Dashboard</a>
    <a href="/berita/view/index.php" class="btn btn-outline-primary ms-2"> Pergi ke Beranda</a>
  </div>
</div>
</body>
</html>