<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil SMKN 64 Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
* {
    font-family: "Libertinus Sans", sans-serif;
}
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .hero {
      background: linear-gradient(rgba(0, 123, 255, 0.6), rgba(0, 123, 255, 0.6)), url('https://via.placeholder.com/1200x400') center/cover no-repeat;
      color: white;
      padding: 80px 0;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    .section-title {
      color: #0d6efd;
    }
    footer {
      background-color: #0d6efd;
    }
  </style>
</head>
<body>

  <?php include '../koneksi/navbar.php'; ?>

  
  <section class="hero text-center">
    <div class="container">
      <h1 class="display-4 fw-bold">Profil SMKN 64 Jakarta</h1>
      <p class="lead">Menjadi Sekolah Unggul dengan Tamatan Berkarakter dan Profesional</p>
    </div>
  </section>


  <section class="container my-5">
    <div class="text-center mb-5">
      <h2 class="section-title fw-bold">Tentang Sekolah</h2>
      <hr class="w-25 mx-auto border-2 border-primary">
    </div>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-building"></i> Informasi Umum</h5>
            <p><strong>Nama Sekolah:</strong> SMK Negeri 64 Jakarta</p>
            <p><strong>Status:</strong> Sekolah Negeri</p>
            <p><strong>Alamat:</strong> Bambu Apus Raya, RT.7/RW.3, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, DKI Jakarta</p>
            <p><strong>Program Keahlian:</strong></p>
            <ul>
              <li>Rekayasa Perangkat Lunak (RPL)</li>
              <li>Desain Komunikasi Visual (DKV)</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title"><i class="bi bi-bullseye"></i> Visi dan Misi</h5>
            <p><strong>Visi:</strong></p>
            <blockquote class="blockquote">
              <p class="mb-0">“Memiliki tamatan yang Berbudi pekerti luhur, Berkarakter, Mandiri, Berprestasi dan Berjiwa Wirausaha”</p>
            </blockquote>
            <p><strong>Misi:</strong></p>
            <ul>
              <li>Mengimplementasikan 5S (Senyum, Sapa, Salam, Sopan dan Santun).</li>
              <li>Membangun peserta didik menjadi seseorang yang memiliki sikap profesional.</li>
              <li>Meningkatkan potensi dan keahlian diri melalui pelatihan internal dan eksternal.</li>
              <li>Menyiapkan tamatan untuk berprestasi hingga tingkat nasional.</li>
              <li>Mengarahkan peserta didik memiliki jiwa wirausaha.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

 
  <footer class="text-white text-center py-3">
    <div class="container">&copy; <?= date('Y') ?> SMK Negeri 64 Jakarta</div>
  </footer>

</body>
</html>
