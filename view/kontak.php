<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak Kami - SMKN 64 Jakarta</title>
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
    .contact-info i {
      margin-right: 10px;
      color: #0d6efd;
    }
    .form-control::placeholder {
      font-style: italic;
      color: #aaa;
    }
    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
    .hero {
      background: linear-gradient(to right, #0d6efd, #7d90adff);
      color: white;
      padding: 60px 0;
      text-align: center;
    }
    .hero h1 {
      font-weight: bold;
    }
    footer {
      background-color: #0d6efd;
    }
  </style>
</head>
<body>

  <?php include '../koneksi/navbar.php'; ?>

 
  <section class="hero">
    <div class="container">
      <h1 class="display-5">Hubungi Kami</h1>
      <p class="lead">Kami siap membantu Anda. Jangan ragu menghubungi kami kapan saja.</p>
    </div>
  </section>

 
  <section class="container my-5">
    <div class="row g-4">
     
      <div class="col-md-6">
        <div class="card shadow-sm h-100">
          <div class="card-body contact-info">
            <h4 class="mb-4"><i class="bi bi-info-circle-fill me-2"></i>Informasi Kontak</h4>
            <p><i class="bi bi-geo-alt-fill"></i><strong> Alamat:</strong><br> Jl. Pendidikan No. 123, Jakarta Timur</p>
            <p><i class="bi bi-envelope-fill"></i><strong> Email:</strong><br> info@smkn64jkt.sch.id</p>
            <p><i class="bi bi-telephone-fill"></i><strong> Telepon:</strong><br> (021) 12345678</p>
            <p><i class="bi bi-clock-fill"></i><strong> Jam Operasional:</strong><br> Senin - Jumat, 07.00 - 15.00 WIB</p>
          </div>
        </div>
      </div>

     
      <div class="col-md-6">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h4 class="mb-4"><i class="bi bi-chat-left-dots-fill me-2"></i>Formulir Pesan</h4>
            <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Contoh: Ahmad Yusuf" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" placeholder="Contoh: emailanda@example.com" required>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan Anda</label>
                <textarea class="form-control" id="pesan" rows="4" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." required></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <footer class="text-white text-center py-3 mt-5">
    <div class="container">&copy; <?= date('Y') ?> SMK Negeri 64 Jakarta</div>
  </footer>

</body>
</html>
