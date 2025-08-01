<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Beranda - Profil Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
* {
    font-family: "Libertinus Sans", sans-serif;
}

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1c73caff;
            color: #fff;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.6rem;
            letter-spacing: 1.5px;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            margin-right: 10px;
            width: 40px;
            height: 40px;
            object-fit: contain;
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
            color: #e2e8eaff;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ffffffff !important; 
        }
      
        section.py-5 {
            position: relative;
            background-image: url('assets/images/64.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 12px;
            margin: 2rem auto;
            max-width: 900px;
            padding: 5rem 2rem;
            box-shadow: 0 0 20px rgb(0 0 0 / 0.3);
            overflow: hidden;
        }
        section.py-5::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            z-index: 0;
        }
       
        section.py-5 > .container {
            position: relative;
            z-index: 1;
            color: #fff;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.7);
        }
        h1 {
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 0.5rem;
        }
        h2 {
            font-weight: 600;
            font-size: 2.2rem;
            color: #eca758ff;
            margin-bottom: 2rem;
        }
        p.lead {
            font-size: 1.25rem;
            color: #c0b021ff; 
            margin-bottom: 2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        .btn-primary {
            background-color: #ffd633;
            border-color: #ffd633;
            font-weight: 600;
            padding: 0.75rem 1.75rem;
            font-size: 1.1rem;
            border-radius: 50px;
            color: #343a40;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e6c200;
            box-shadow: 0 6px 15px rgb(230 194 0 / 0.6);
            color: #212529;
        }
        footer.bg-primary {
        background: linear-gradient(135deg, #0d6efd, #2e4472ff);
        font-weight: 500;
        font-size: 1rem;
        letter-spacing: 0.05em;
        box-shadow: 0 -3px 10px rgb(0 0 0 / 0.15);
        color: #fff;
        flex-shrink: 0;
        padding: 1rem 0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../assets/images/64.png" />
                SMKN 64 Jakarta
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita/view/profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita/view/berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita/view/kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita/admin/login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
    <section class="py-5">
        <div class="container text-center">
            <h1>Selamat Datang di SMKN 64 Jakarta</h1>
            <h2>Membangun Generasi Unggul dan Kompeten</h2>

            <p class="lead">
                SMKN 64 Jakarta merupakan salah satu sekolah menengah kejuruan terbaik yang berkomitmen memberikan pendidikan berkualitas dan menyiapkan siswa untuk siap kerja di dunia industri.
            </p>

            <p>
                Kami menyediakan informasi terbaru seputar kegiatan sekolah, profil guru, program keahlian, dan berita terkini yang dapat membantu siswa, orang tua, dan masyarakat umum untuk mengenal lebih dekat aktivitas dan prestasi kami.
            </p>

            <a href="/berita/view/berita.php" class="btn btn-primary mt-3">Lihat Berita Terbaru</a>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-4">Program Keahlian</h3>
            <div class="row">
                <div class="col-md-4">
                    <h4>Rekayasa Perangkat Lunak</h4>
                    <p>RPL adalah ilmu dan teknik yang mempelajari cara-cara pengembangan, pembuatan, dan pemeliharaan perangkat lunak agar perangkat lunak tersebut berkualitas, efisien, dan sesuai dengan kebutuhan pengguna.</p>
                </div>
                <div class="col-md-4">
                    <h4>Desain Komiunikasi Visual</h4>
                    <p>Desain Komunikasi Visual adalah bidang ilmu yang mempelajari bagaimana menyampaikan pesan atau informasi melalui elemen visual, seperti gambar, warna, bentuk, tipografi, dan tata letak. Tujuannya adalah agar pesan tersebut bisa diterima dengan jelas, menarik, dan efektif oleh audiens.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h3 class="text-center mb-4">Kegiatan Sekolah Terbaru</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Momen Penuh Hikmat Pesantren Kilat</strong> - 17 Maret 2025<br>
                    Pelaksanaan pesantren kilat diadakan selama 3 hari yakni Senin hingga Rabu, 19 Maret 2025. Kegiatan ini diselenggarakan sebagai upaya meningkatkan keimanan dan ketaqwaan para siswa muslim di SMKN 64 Jakarta. . Pesantren kilat ini secara rutin dilaksanakan setiap tahunnya selama bulan Ramadhan. Pelaksana kegiatan ini terdiri dari kepanitiaan OSIS dan ROHIS sekolah. 

Dalam pelaksanaanya, siswa memeroleh materi seputar agama Islam, bulan Ramadhan, Pendidikan Ahklak dan berbagai  acara seru lain yang bertemakan pengetehuan Islam. Selain itu, siswa juga memiliki kesempatan untuk berpartisipasi dalam pesantren kilat dengan mengikuti berbagai perlombaan seperti lomba Azan, MTQ, Poster Islami, dan Cerdas Cermat Islami.
                </li>
                <li class="list-group-item">
                    <strong>MEMPERINGATI HARI KESAKTIAN PANCASILA</strong> - 1 Oktober 2024<br>
                    Hari Kesaktian Pancasila diperingati setiap tanggal 1 Oktober sebagai momen penting dalam sejarah bangsa Indonesia. Peringatan ini tidak hanya mengenang peristiwa G30S/PKI, tetapi juga menegaskan komitmen kita terhadap nilai-nilai Pancasila sebagai dasar negara. Upacara tersebut dilaksanakan pada hari Selasa, yang dipimpin oleh pemimpin upacara. Adapun pembina upacara tersebut adalah Ibu Dewi Puspitasari, S.ST. Par., M.Par. selaku Kepala SMKN 64 Jakarta.

Tahun ini, tema yang diangkat adalah "Bersama Pancasila Kita Wujudkan Indonesia Emas". Tema ini sejalan dengan visi Indonesia untuk mencapai kemajuan yang berkelanjutan pada tahun 2045, dengan Pancasila sebagai landasan dalam setiap langkah pembangunan. Melalui peringatan ini, diharapkan generasi mu
                </li>
                <li class="list-group-item">
                    <strong>Peresmian Sekolah SMKn 64 Jakarta</strong> - 22 July 2025<br>
                   Wakil Gubernur DKI Jakarta, Rano Karno, meresmikan gedung baru SMKN 64 di Jalan Mpo Nori, Kelurahan Bambu Apus, Cipayung, Jakarta Timur, Selasa (22/7). Gedung setinggi dua lantai di lahan seluas 3.000 ribu meter persegi ini merupakan bentuk kewajiban pengembang Pakuwon Grup dan rampung dibangun awal 2025.
                </li>
            </ul>
        </div>
    </section>

    
    <section class="py-5">
        <div class="container">
            <h3 class="text-center mb-4">Testimoni Alumni</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <blockquote class="blockquote">
                        <p>"SMKN 64 Jakarta memberikan saya bekal keterampilan yang sangat berguna saat bekerja di perusahaan teknologi besar."</p>
                        <footer class="blockquote-footer">Agung Wibowo, Alumni 2024</footer>
                    </blockquote>
                </div>
                <div class="col-md-6 mb-3">
                    <blockquote class="blockquote">
                        <p>"Dari sini saya belajar disiplin dan kerja keras yang membantu saya sukses di bidang otomotif."</p>
                        <footer class="blockquote-footer">Abudzar Al Ghifari, Alumni 2023</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="bg-primary text-white pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row gy-4">

      <div class="col-md-4 text-center text-md-start">
        <img src="../assets/images/64.png" alt="Logo SMKN 64 Jakarta" style="max-width: 120px;" class="mb-3">
        <p>SMKN 64 Jakarta, mencetak generasi muda berprestasi dengan keahlian unggul dan karakter kuat.</p>
      </div>

      <!-- Navigasi Cepat -->
      <div class="col-md-4 text-center">
        <h5 class="mb-3 fw-bold">Navigasi</h5>
        <ul class="list-unstyled">
          <li><a href="../view/index.php" class="text-white text-decoration-none footer-link">Beranda</a></li>
          <li><a href="../view/profil.php" class="text-white text-decoration-none footer-link">Profil Sekolah</a></li>
          <li><a href="../view/berita.php" class="text-white text-decoration-none footer-link">Berita</a></li>
          <li><a href="../view/kontak.php" class="text-white text-decoration-none footer-link">Kontak</a></li>
        </ul>
      </div>

      <!-- Info Kontak & Sosial Media -->
      <div class="col-md-4 text-center text-md-end">
        <h5 class="mb-3 fw-bold">Kontak Kami</h5>
        <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i>Jl. Mpo Nori RT 09 RW 03
Kel. Bambu Apus, Kec. Cipayung, Kota Jakarta Timur 
DKI Jakarta</p>
        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i>info@smkn64-jkt.sch.id</p>
       
      </div>
    </div>

    <hr class="my-4 border-light">

    <div class="text-center small">
      &copy; <?= date('Y') ?> SMKN 64 Jakarta. Semua hak cipta dilindungi.
    </div>
  </div>

  <style>
    .footer-link:hover {
      text-decoration: underline;
      color: #ffc107 !important; 
    }
  </style>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

