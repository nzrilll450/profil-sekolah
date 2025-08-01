<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Admin - SMKN 64 Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #6c757d, #0d6efd);
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }
    .login-box {
      background: #fff;
      border-radius: 20px;
      padding: 40px 30px;
      max-width: 400px;
      width: 100%;
      box-shadow: 0 10px 25px rgba(13, 110, 253, 0.3);
      transition: box-shadow 0.3s ease-in-out;
    }
    .login-box:hover {
      box-shadow: 0 15px 40px rgba(13, 110, 253, 0.5);
    }
    .login-box h3 {
      font-weight: 700;
      color: #0d6efd;
      margin-bottom: 30px;
      text-align: center;
      letter-spacing: 1px;
    }
    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 8px rgba(13, 110, 253, 0.5);
    }
    .input-group-text {
      background-color: #0d6efd;
      border: none;
      color: #fff;
    }
    .btn-login {
      background-color: #0d6efd;
      border: none;
      font-weight: 600;
      padding: 10px;
      transition: background-color 0.3s ease;
    }
    .btn-login:hover {
      background-color: #084298;
    }
    .alert {
      font-size: 0.9rem;
    }
    .btn-secondary {
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="login-box shadow">
    <h3>Login Admin</h3>
    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>
    <form action="proses_login.php" method="POST" autocomplete="off">
      <div class="mb-4">
        <label for="username" class="form-label fw-semibold">Username</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
          <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required autofocus />
        </div>
      </div>
      <div class="mb-4">
        <label for="password" class="form-label fw-semibold">Password</label>
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
          <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required />
        </div>
      </div>
      <button type="submit" class="btn btn-login w-100">Masuk</button>
    </form>
    <div class="text-center mt-4">
      <a href="../view/index.php" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
