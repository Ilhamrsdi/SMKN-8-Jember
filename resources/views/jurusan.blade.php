<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jurusan</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #e6b86a;
    }

    .container {
      padding: 30px;
      text-align: center;
    }

    h2 {
      color: white;
      margin-bottom: 20px;
      letter-spacing: 2px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .card {
      background-color: #d9d9d9;
      padding: 10px;
      border-radius: 4px;
    }

    .card img {
      width: 100%;
      height: 120px;
      object-fit: cover;
      border-radius: 3px;
    }

    .card h4 {
      margin: 10px 0 5px;
    }

    .card p {
      font-size: 12px;
      margin: 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 500px) {
      .grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>JURUSAN</h2>

    <div class="grid">

      <div class="card">
        <img src="img/tkj.jpg">
        <h4>TKJ</h4>
        <p>Teknik Komputer & Jaringan</p>
      </div>

      <div class="card">
        <img src="img/rpl.jpg">
        <h4>RPL</h4>
        <p>Rekayasa Perangkat Lunak</p>
      </div>

      <div class="card">
        <img src="img/dkv.jpg">
        <h4>DKV</h4>
        <p>Desain Komunikasi Visual</p>
      </div>

      <div class="card">
        <img src="img/atph.jpg">
        <h4>ATPH</h4>
        <p>Agribisnis Tanaman Pangan & Hortikultura</p>
      </div>

      <div class="card">
        <img src="img/apt.jpg">
        <h4>APT</h4>
        <p>Agribisnis Pembenihan Tanaman</p>
      </div>

      <div class="card">
        <img src="img/tsm.jpg">
        <h4>TSM</h4>
        <p>Teknik Sepeda Motor</p>
      </div>

      <div class="card">
        <img src="img/tkr.jpg">
        <h4>TKR</h4>
        <p>Teknik Kendaraan Ringan</p>
      </div>

    </div>
  </div>

</body>
</html>