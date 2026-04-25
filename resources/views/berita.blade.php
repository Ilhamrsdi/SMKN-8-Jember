<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Berita SMKN 8 Jember</title>

<style>
body {
  margin: 0;
  font-family: 'Arial', sans-serif;
  background: #f39c6b;
}

/* CONTAINER */
.container {
  width: 900px;
  margin: auto;
  padding: 20px;
}

/* HEADER */
.title {
  text-align: center;
  color: #fff;
  font-weight: bold;
  letter-spacing: 2px;
  margin-bottom: 20px;
}

/* GRID UTAMA */
.grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

/* BLOK PUTIH */
.box {
  background: white;
  padding: 12px;
  border-radius: 6px;
}

/* POSTER MINI (UNGU) */
.poster {
  background: #7b2cbf;
  padding: 10px;
  border-radius: 8px;
  color: white;
}

.poster img {
  width: 100%;
  border-radius: 5px;
  margin-bottom: 8px;
}

.poster .label {
  background: #5a189a;
  padding: 5px;
  text-align: center;
  font-size: 12px;
  border-radius: 20px;
  margin-bottom: 8px;
}

/* TEXT */
.text p {
  font-size: 14px;
  text-align: justify;
  line-height: 1.5;
}

.text b {
  color: #000;
}

/* BAGIAN BAWAH */
.bottom {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-top: 20px;
}

/* FOOTER */
.footer {
  margin-top: 20px;
  color: white;
  font-size: 13px;
}

/* RESPONSIVE */
@media(max-width: 768px){
  .container {
    width: 95%;
  }
  .grid, .bottom {
    grid-template-columns: 1fr;
  }
}
</style>

</head>
<body>

<div class="container">

  <div class="title">BERITA SMKN 8 JEMBER</div>

  <!-- ATAS -->
  <div class="grid">

    <!-- KIRI (POSTER) -->
    <div class="poster">
  <div class="label">SMK NEGERI 8 JEMBER</div>
  <img src="{{ asset('images/images1.jpeg') }}">
</div>

    <!-- KANAN (TEXT PANJANG) -->
    <div class="box text">
      <p><b>A Landmark Partnership: SMKN 8 Jember and Beijing Institute of Technology (BIT)</b></p>

      <p>
        SMK Negeri 8 Jember resmi menjalin kerja sama internasional melalui penandatanganan Memorandum of Understanding (MoU) dengan Beijing Institute of Technology (BIT).
      </p>

      <p>
        Kerja sama ini membuka peluang besar bagi peserta didik SMKN 8 Jember untuk mengembangkan kompetensi global, melanjutkan pendidikan ke jenjang lebih tinggi, serta mengakses program pelatihan dan beasiswa internasional.
      </p>

      <p>
        Kolaborasi ini menjadi bukti komitmen SMKN 8 Jember dalam mencetak lulusan unggul, berdaya saing, dan siap menghadapi tantangan global.
      </p>

      <p><b>SMKN 8 JEMBER – WE STOPT!</b></p>
    </div>

  </div>

  <!-- BAWAH -->
  <div class="bottom">

    <!-- TEXT -->
    <div class="box text">
      <p><b>SMKN 8 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan Nasional 2025</b></p>

      <p>
        Senin, 10 November 2025, SMK Negeri 8 Jember menggelar upacara bendera khidmat dalam rangka memperingati Hari Pahlawan Nasional.
      </p>

      <p>
        Upacara diikuti oleh seluruh siswa dan guru dengan penuh semangat nasionalisme.
      </p>

      <p>
        Momentum ini menjadi pengingat akan pentingnya nilai-nilai perjuangan, pengorbanan, dan cinta tanah air.
      </p>

      <p><b>SMKN 8 JEMBER – WE STOPT!</b></p>
    </div>

    
    <!-- KIRI (POSTER) -->
    <div class="poster">
  <div class="label">SMK NEGERI 8 JEMBER</div>
  <img src="{{ asset('images/images2.jpeg') }}">
</div>

  </div>

  <div class="footer">SMKN 8 JEMBER – WE STOPT!</div>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Berita SMKN 8 Jember</title>

<style>
body {
  margin: 0;
  font-family: 'Arial', sans-serif;
  background: #f39c6b;
}

/* CONTAINER */
.container {
  width: 900px;
  margin: auto;
  padding: 20px;
}

/* HEADER */
.title {
  text-align: center;
  color: #fff;
  font-weight: bold;
  letter-spacing: 2px;
  margin-bottom: 20px;
}

/* GRID UTAMA */
.grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

/* BLOK PUTIH */
.box {
  background: white;
  padding: 12px;
  border-radius: 6px;
}

/* POSTER MINI (UNGU) */
.poster {
  background: #7b2cbf;
  padding: 10px;
  border-radius: 8px;
  color: white;
}

.poster img {
  width: 100%;
  border-radius: 5px;
  margin-bottom: 8px;
}

.poster .label {
  background: #5a189a;
  padding: 5px;
  text-align: center;
  font-size: 12px;
  border-radius: 20px;
  margin-bottom: 8px;
}

/* TEXT */
.text p {
  font-size: 14px;
  text-align: justify;
  line-height: 1.5;
}

.text b {
  color: #000;
}

/* BAGIAN BAWAH */
.bottom {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-top: 20px;
}

/* FOOTER */
.footer {
  margin-top: 20px;
  color: white;
  font-size: 13px;
}

/* RESPONSIVE */
@media(max-width: 768px){
  .container {
    width: 95%;
  }
  .grid, .bottom {
    grid-template-columns: 1fr;
  }
}
</style>

</head>
<body>

<div class="container">

  <!-- ATAS -->
  <div class="grid">

    <!-- KIRI (POSTER) -->
    
    <!-- KIRI (POSTER) -->
    <div class="poster">
  <div class="label">SMK NEGERI 8 JEMBER</div>
  <img src="{{ asset('images/images3.jpeg') }}">
</div>

    <!-- KANAN (TEXT PANJANG) -->
    <div class="box text">
      <p><b>A Landmark Partnership: SMKN 8 Jember and Beijing Institute of Technology (BIT)</b></p>

      <p>
        SMK Negeri 8 Jember resmi menjalin kerja sama internasional melalui penandatanganan Memorandum of Understanding (MoU) dengan Beijing Institute of Technology (BIT).
      </p>

      <p>
        Kerja sama ini membuka peluang besar bagi peserta didik SMKN 8 Jember untuk mengembangkan kompetensi global, melanjutkan pendidikan ke jenjang lebih tinggi, serta mengakses program pelatihan dan beasiswa internasional.
      </p>

      <p>
        Kolaborasi ini menjadi bukti komitmen SMKN 8 Jember dalam mencetak lulusan unggul, berdaya saing, dan siap menghadapi tantangan global.
      </p>

      <p><b>SMKN 8 JEMBER – WE STOPT!</b></p>
    </div>

  </div>

  <!-- BAWAH -->
  <div class="bottom">

    <!-- TEXT -->
    <div class="box text">
      <p><b>SMKN 8 Jember melaksanakan upacara bendera dalam rangka memperingati Hari Pahlawan Nasional 2025</b></p>

      <p>
        Senin, 10 November 2025, SMK Negeri 8 Jember menggelar upacara bendera khidmat dalam rangka memperingati Hari Pahlawan Nasional.
      </p>

      <p>
        Upacara diikuti oleh seluruh siswa dan guru dengan penuh semangat nasionalisme.
      </p>

      <p>
        Momentum ini menjadi pengingat akan pentingnya nilai-nilai perjuangan, pengorbanan, dan cinta tanah air.
      </p>

      <p><b>SMKN 8 JEMBER – WE STOPT!</b></p>
    </div>

    <!-- POSTER -->
    
    <!-- KIRI (POSTER) -->
    <div class="poster">
  <div class="label">SMK NEGERI 8 JEMBER</div>
  <img src="{{ asset('images/images4.jpeg') }}">
</div>
  </div>

  <div class="footer">SMKN 8 JEMBER – WE STOPT!</div>

</div>

</body>
</html>