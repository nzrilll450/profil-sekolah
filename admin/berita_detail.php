<?php
include '../koneksi/koneksi.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$query = "SELECT * FROM berita WHERE id_berita = $id";
$result = mysqli_query($con, $query);
$berita = mysqli_fetch_assoc($result);

if (!$berita) {
    echo "Berita tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($berita['judul']); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .berita-img {
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
            cursor: zoom-in;
            transition: 0.3s ease;
        }

        .berita-img:hover {
            opacity: 0.8;
        }

        .modal-img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <?php include '../koneksi/navbar.php'; ?> 

    <section class="container my-5">
        <h1 class="mb-3"><?php echo htmlspecialchars($berita['judul']); ?></h1>
        <p class="text-muted"><i class="bi bi-calendar-event"></i> <?php echo date("d M Y", strtotime($berita['tanggal'])); ?></p>

        <?php
        $gambar = !empty($berita['gambar']) 
            ? "../assets/img/berita/" . $berita['gambar'] 
            : "https://via.placeholder.com/600x300?text=No+Image";
        ?>
        <img src="<?php echo $gambar; ?>" class="berita-img" alt="Gambar Berita" onclick="showZoom(this.src)">

        <div class="fs-5" style="white-space: pre-line;">
            <?php echo htmlspecialchars($berita['isi']); ?>
        </div>

        <div class="mt-4">
            <a href="../view/berita.php" class="btn btn-outline-secondary">← Kembali ke Daftar Berita</a>
        </div>
    </section>

    <!-- Modal Zoom -->
    <div class="modal fade" id="zoomModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
          <img src="" id="zoomImg" class="modal-img rounded shadow">
        </div>
      </div>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-5">
        <div class="container">&copy; <?= date('Y') ?> SMKN 64 Jakarta</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showZoom(src) {
            const zoomImg = document.getElementById('zoomImg');
            zoomImg.src = src;
            const zoomModal = new bootstrap.Modal(document.getElementById('zoomModal'));
            zoomModal.show();
        }
    </script>
</body>
</html>