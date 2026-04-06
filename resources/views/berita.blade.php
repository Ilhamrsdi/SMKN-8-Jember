<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Galeri SMKN 8 Jember</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom, #f39c5a, #e67e22);
    }

    .container {
      padding: 40px 20px;
      text-align: center;
    }

    h2 {
      color: white;
      margin-bottom: 30px;
      font-size: 22px;
      letter-spacing: 2px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
      max-width: 1000px;
      margin: auto;
    }

    .card {
      background: #dcdcdc;
      padding: 10px;
      border-radius: 6px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px) scale(1.03);
    }

    .card img {
      width: 100%;
      height: 270px;
      object-fit: cover;
      border-radius: 4px;
    }

    /* Responsive */
    @media (max-width: 900px) {
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
    <h2>GALERI SMKN 8 JEMBER</h2>

    <div class="grid">

      <div class="card">
        <img src="img/galeri1.jpg">
      </div>

      <div class="card">
        <img src="img/galeri2.jpg">
      </div>

      <div class="card">
        <img src="img/galeri3.jpg">
      </div>

      <div class="card">
        <img src="img/galeri4.jpg">
      </div>

      <div class="card">
        <img src="img/galeri5.jpg">
      </div>

      <div class="card">
        <img src="img/galeri6.jpg">
      </div>

    </div>
  </div>

</body>
</html>