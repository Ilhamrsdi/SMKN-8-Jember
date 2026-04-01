<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page Sekolah</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      line-height: 1.6;
      background: #f4f6f9;
      color: #333;
    }

    /* Navbar */
    header {
      background: #2c3e50;
      color: #fff;
      padding: 15px 0;
    }

    .container {
      width: 90%;
      max-width: 1100px;
      margin: auto;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar h1 {
      font-size: 22px;
    }

    .navbar ul {
      list-style: none;
      display: flex;
    }

    .navbar ul li {
      margin-left: 20px;
    }

    .navbar ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 14px;
    }

    .navbar ul li a:hover {
      text-decoration: underline;
    }

    /* Hero Section */
    .hero {
      background: url('https://images.unsplash.com/photo-1588072432836-e10032774350') no-repeat center center/cover;
      height: 90vh;
      color: #fff;
      display: flex;
      align-items: center;
      text-align: center;
    }

    .hero-overlay {
      background: rgba(0,0,0,0.6);
      width: 100%;
      padding: 40px;
    }

    .hero h2 {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    .btn:hover {
      background: #2980b9;
    }

    /* Section */
    section {
      padding: 60px 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      text-align: center;
    }

    .card h3 {
      margin-bottom: 10px;
    }

    /* Footer */
    footer {
      background: #2c3e50;
      color: #fff;
      text-align: center;
      padding: 15px 0;
    }

    @media(max-width: 768px) {
      .hero h2 {
        font-size: 28px;
      }

      .navbar {
        flex-direction: column;
      }

      .navbar ul {
        margin-top: 10px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <header>
    <div class="container navbar">
      <h1>SMK Negeri Contoh</h1>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Jurusan</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-overlay">
      <h2>Selamat Datang di Sekolah Kami</h2>
      <p>Mencetak generasi unggul, berprestasi, dan berakhlak mulia</p>
      <a href="#" class="btn">Daftar Sekarang</a>
    </div>
  </section>

  <!-- About -->
  <section>
    <div class="container">
      <div class="section-title">
        <h2>Tentang Kami</h2>
        <p>Sekolah yang berfokus pada pendidikan berkualitas dan pengembangan karakter siswa.</p>
      </div>

      <div class="cards">
        <div class="card">
          <h3>Visi</h3>
          <p>Menjadi sekolah unggulan yang menghasilkan lulusan kompeten dan siap kerja.</p>
        </div>
        <div class="card">
          <h3>Misi</h3>
          <p>Menyediakan pendidikan berkualitas dengan tenaga pengajar profesional.</p>
        </div>
        <div class="card">
          <h3>Fasilitas</h3>
          <p>Laboratorium, perpustakaan, ruang komputer, dan fasilitas modern lainnya.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Jurusan -->
  <section style="background:#ecf0f1;">
    <div class="container">
      <div class="section-title">
        <h2>Jurusan</h2>
      </div>

      <div class="cards">
        <div class="card">
          <h3>RPL</h3>
          <p>Rekayasa Perangkat Lunak</p>
        </div>
        <div class="card">
          <h3>TKJ</h3>
          <p>Teknik Komputer dan Jaringan</p>
        </div>
        <div class="card">
          <h3>MM</h3>
          <p>Multimedia</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section>
    <div class="container">
      <div class="section-title">
        <h2>Kontak Kami</h2>
      </div>

      <div class="card">
        <p>Email: info@sekolah.com</p>
        <p>Telepon: 0812-3456-7890</p>
        <p>Alamat: Jl. Pendidikan No. 1</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2026 SMK Negeri Contoh. All Rights Reserved.</p>
  </footer>

</body>
</html>