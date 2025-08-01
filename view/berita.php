<?php
include '../koneksi/koneksi.php';

$query = "SELECT * FROM berita ORDER BY tanggal DESC";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Berita Terbaru - SMKN 64 Jakarta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
* {
    font-family: "Libertinus Sans", sans-serif;
}

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-text {
            max-height: 4.5em;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .hero {
            background: linear-gradient(to right, #0d6efd, #14bddbff);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .card-img-top {
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }
    </style>
</head>
<body>

    <?php include '../koneksi/navbar.php'; ?>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h1 class="display-5 fw-bold">Berita Terbaru</h1>
            <p class="lead">Informasi & kabar terkini seputar SMKN 64 Jakarta</p>
        </div>
    </section>

    <!-- Daftar Berita -->
    <section class="container my-5">
        <div class="row g-4">

        <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): 
                $gambar = !empty($row['gambar']) 
                    ? "../assets/img/berita/" . $row['gambar'] 
                    : "https://via.placeholder.com/400x300?text=No+Image";
            ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $gambar; ?>" class="card-img-top" alt="Gambar Berita">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['judul']); ?></h5>
                            <small class="text-muted mb-2">
                                <i class="bi bi-calendar-event"></i> 
                                <?php echo date("d M Y", strtotime($row['tanggal'])); ?>
                            </small>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars(substr($row['isi'], 0, 150))) . '...'; ?></p>
                            <a href="/berita/admin/berita_detail.php?id=<?php echo $row['id_berita']; ?>" class="btn btn-outline-primary mt-auto">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    <i class="bi bi-info-circle-fill"></i> Belum ada berita terbaru.
                </div>
            </div>
        <?php endif; ?>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <div class="container">&copy; <?= date('Y') ?> SMK Negeri 64 Jakarta</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>