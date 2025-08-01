<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php">SMKN 64 Jakarta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? ' active' : '' ?>" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'profil.php' ? ' active' : '' ?>" href="/berita/view/profil.php">Profil</a></li>
                <li class="nav-item"><a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'berita.php' ? ' active' : '' ?>" href="/berita/view/berita.php">Berita</a></li>
                <li class="nav-item"><a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'kontak.php' ? ' active' : '' ?>" href="/berita/view/kontak.php">Kontak</a></li>
                <li class="nav-item"><a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'login.php' ? ' active' : '' ?>" href="/berita/admin/login.php">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>
