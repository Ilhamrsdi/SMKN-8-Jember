<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SMKN 8 Jember</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Navbar */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #e6a84f;
      padding: 10px 20px;
    }

    .navbar .logo {
      display: flex;
      align-items: center;
      color: white;
      font-weight: bold;
    }

    .navbar img {
      width: 40px;
      margin-right: 10px;
    }

    .menu {
      display: flex;
      gap: 20px;
    }

    .menu a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 14px;
    }

    .login-btn {
      background-color: white;
      color: #e6a84f;
      padding: 5px 12px;
      border-radius: 4px;
      font-weight: bold;
    }

    /* Hero Image */
    .hero {
      width: 100%;
      height: 500px;
      background-image: url('image.png'); /* ganti sesuai nama file gambar */
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo">
      <img src="{{ asset('image/logo-smk.jpeg') }}" alt="logo">
      SMKN 8 JEMBER
    </div>

    <div class="menu">
      <a href="#">PROFIL</a>
      <a href="#">JURUSAN</a>
      <a href="#">BERITA</a>
      <a href="#">GALERI</a>
      <a href="#">PENGUMUMAN</a>
      <a href="#" class="login-btn">LOGIN</a>
    </div>
  </div>

  <!-- Hero Section -->
  <div class="hero"></div>

</body>
</html>