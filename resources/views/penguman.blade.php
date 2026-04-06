<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pengumuman SMKN 8 Jember</title>

<style>

*{
box-sizing:border-box;
margin:0;
padding:0;
font-family:'Segoe UI',sans-serif;
}

body{
background:#983305;
}

/* HEADER */

.header{
background:rgb(230,146,111);
color:white;
font-weight:bold;
font-size:24px;
text-align:center;
padding:18px;
letter-spacing:2px;
}

/* CONTAINER */

.container{
max-width:920px;
margin:30px auto;
padding:20px;
}

/* KOTAK PENGUMUMAN */

.beasiswa{
background:#fff5f1;
border:3px solid #b4552b;
border-radius:6px;
display:flex;
gap:20px;
padding:18px;
align-items:center;
box-shadow:0 6px 15px rgba(180,85,43,0.3);
}

.beasiswa-left{
flex:1;
}

.beasiswa-left p{
color:#b4552b;
font-weight:bold;
margin:6px 0;
}

.beasiswa-left h3{
color:#b4552b;
margin-top:10px;
font-size:20px;
}

.beasiswa-right{
text-align:center;
}

.beasiswa-right img{
width:120px;
height:120px;
border-radius:50%;
border:3px solid #b4552b;
object-fit:cover;
}

.nama{
font-weight:bold;
margin-top:6px;
color:#b4552b;
}

/* FOTO PENGUMUMAN */

.foto-pengumuman{
margin-top:25px;
background:#fff5f1;
border:3px solid #b4552b;
padding:10px;
border-radius:6px;
}

.foto-pengumuman img{
width:100%;
border-radius:4px;
}

/* DESKRIPSI */

.deskripsi{
margin-top:20px;
background:#fff5f1;
padding:15px;
border-radius:6px;
border:2px solid #b4552b;
color:#4d2e20;
line-height:1.5;
}

/* PURNA TUGAS */

.purna-tugas{
margin-top:40px;
background:#fff5f1;
border:3px solid #b4552b;
border-radius:8px;
display:flex;
gap:20px;
padding:20px;
}

.purna-tugas img{
width:150px;
height:150px;
border-radius:8px;
border:3px solid #b4552b;
object-fit:cover;
}

.info{
flex:1;
}

.info h2{
color:#b4552b;
margin-bottom:8px;
}

footer{
text-align:center;
color:white;
margin:40px 0;
}

</style>
</head>

<body>

<div class="header">
PENGUMUMAN SMKN 8 JEMBER
</div>

<div class="container">

<div class="beasiswa">

<div class="beasiswa-left">
<p>SELAMAT & SUKSES</p>
<p>kepada peserta didik yang menerima beasiswa</p>
<h3>Smart Scholarship YBM BRILian SBO MALANG</h3>
</div>

<div class="beasiswa-right">
<img src="{{ asset('images/images.webp') }}" alt="foto beasiswa">
<div class="nama">Hj. Nurhayati, S.Pd., M.Pd</div>
</div>

</div>

<!-- FOTO PENGUMUMAN -->

<div class="foto-pengumuman">
<img src="beasiswa.jpg">
</div>

<div class="deskripsi">

<b>ESKALASI DAN PERSEMBAHAN</b><br><br>

Alhamdulillah peserta didik lulus seleksi dan berhak menerima beasiswa Smart Scholarship YBM BRILian SBO Malang.
Program ini memberikan pembinaan secara berkala, bimbingan serta pelatihan guna membentuk SDM yang unggul,
berkarakter, dan memiliki kompetensi yang baik.

<br><br>
SMKN 8 Jember, was toppp!!

</div>

<!-- PURNA TUGAS -->

<div class="purna-tugas">

<img src="kudhoeri.jpg">

<div class="info">

<h2>Selamat Purna Tugas</h2>

<b>H. Kudhoeri, S.Pd.</b><br>
Guru PKN

<p>
Terima kasih atas dedikasi dan pengabdian di SMKN 8 Jember.
Semoga selalu diberikan kesehatan dan keberkahan.
</p>

<p>
Kami mengucapkan terima kasih atas kontribusi Bapak dalam
membangun dan mengembangkan sekolah ini.
</p>

</div>

</div>

</div>

<footer>
© 2026 SMKN 8 Jember
</footer>

</body>
</html>