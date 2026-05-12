<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMKN 8 Jember</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f5f5f5;
}

/* NAVBAR */
.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background-color:#e6b97a;
    padding:10px 30px;
}

.logo{
    display:flex;
    align-items:center;
    color:white;
    font-weight:bold;
}

.logo img{
    width:40px;
    margin-right:10px;
}

.menu{
    display:flex;
    list-style:none;
}

.menu li{
    margin:0 15px;
}

.menu li a{
    text-decoration:none;
    color:white;
    font-weight:500;
}

.menu li a:hover{
    text-decoration:underline;
}

.login-btn{
    background-color:white;
    color:#e6b97a;
    padding:6px 12px;
    border-radius:5px;
    text-decoration:none;
    font-weight:bold;
}

/* HERO */
.hero{
    width:100%;
    height:500px;
    overflow:hidden;
}

.hero img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* PROFIL */
.profil{
    padding:40px 20px 80px;
    min-height:100vh;
    background:linear-gradient(to bottom, #FF9E62, #B25E39);
}

.profil h2{
    text-align:center;
    color:white;
    margin-bottom:30px;
    letter-spacing:1px;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(2, 1fr);
    gap:30px;
    max-width:1000px;
    margin:auto;
}

/* CARD */
.card{
    background:#e6e6e6;
    padding:10px;
    border-radius:5px;
    border:5px solid #ddd;
    box-shadow:0 6px 12px rgba(0,0,0,0.2);
    transition:transform 0.3s ease, box-shadow 0.3s ease;
    cursor:pointer;
    text-align:center;
}

.card img{
    width:100%;
    height:250px;
    object-fit:cover;
    border-radius:3px;
}

.card h4{
    margin-top:10px;
    color:#333;
}

.card p{
    margin-top:5px;
    color:#555;
    font-size:14px;
}

/* ACTIVE CARD */
.card.active{
    transform:scale(1.05);
    box-shadow:0 12px 25px rgba(0,0,0,0.4);
    z-index:2;
    position:relative;
}

/* JURUSAN */
.jurusan{
    padding:50px 20px 80px;
    background:linear-gradient(to bottom, #FF9E62, #B25E39);
}

.jurusan h2{
    text-align:center;
    margin-bottom:40px;
    color:white;
}

/* BERITA */
.berita{
    background:#f39c6b;
    padding:50px 20px;
}

.container{
    width:900px;
    margin:auto;
}

.title{
    text-align:center;
    color:#fff;
    font-weight:bold;
    letter-spacing:2px;
    margin-bottom:20px;
    font-size:28px;
}

.berita-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-bottom:20px;
}

.box{
    background:white;
    padding:12px;
    border-radius:6px;
}

.poster{
    background:#7b2cbf;
    padding:10px;
    border-radius:8px;
    color:white;
}

.poster img{
    width:100%;
    border-radius:5px;
    margin-bottom:8px;
}

.poster .label{
    background:#5a189a;
    padding:5px;
    text-align:center;
    font-size:12px;
    border-radius:20px;
    margin-bottom:8px;
}

.text p{
    font-size:14px;
    text-align:justify;
    line-height:1.5;
    margin-bottom:10px;
}

.text b{
    color:#000;
}

.bottom{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-top:20px;
}

.footer{
    margin-top:20px;
    color:white;
    font-size:13px;
}

/* GALERI */
.galeri{
    padding:40px 20px 80px;
    background:linear-gradient(to bottom, #FF9E62, #E54500);
    min-height:100vh;
}

.galeri h2{
    color:white;
    margin-bottom:30px;
    text-align:center;
    letter-spacing:1px;
}

.galeri-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:35px;
    max-width:1000px;
    margin:auto;
}

.galeri .card img{
    height:350px;
}

/* RESPONSIVE */
@media (max-width:900px){
    .galeri-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media (max-width:768px){

    .navbar{
        flex-direction:column;
    }

    .menu{
        flex-direction:column;
        margin:10px 0;
    }

    .hero{
        height:300px;
    }

    .grid,
    .berita-grid,
    .bottom{
        grid-template-columns:1fr;
    }

    .container{
        width:95%;
    }
}

@media (max-width:600px){
    .galeri-grid{
        grid-template-columns:1fr;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">

    <div class="logo">
        <img src="{{ asset('images/download.png') }}" alt="logo">
        SMKN 8 JEMBER
    </div>

    <ul class="menu">
        <li><a href="#">PROFIL</a></li>
        <li><a href="#">JURUSAN</a></li>
        <li><a href="#">BERITA</a></li>
        <li><a href="#">GALERI</a></li>
        <li><a href="#">PENGUMUMAN</a></li>
    </ul>

    <a href="#" class="login-btn">LOGIN</a>

</div>

<!-- HERO -->
<div class="hero">
    <img src="{{ asset('images/lobbysmk.jpeg') }}" alt="lobby">
</div>

<!-- PROFIL -->
<div class="profil">

    <h2>PROFIL SMKN 8 JEMBER</h2>

    <div class="grid">

        <div class="card">
            <img src="{{ asset('images/profil1.jpg') }}" alt="foto1">
        </div>

        <div class="card">
            <img src="{{ asset('images/profil2.jpg') }}" alt="foto2">
        </div>

        <div class="card">
            <img src="{{ asset('images/profil3.jpg') }}" alt="foto3">
        </div>

        <div class="card">
            <img src="{{ asset('images/profil4.jpg') }}" alt="foto4">
        </div>

    </div>

</div>

<!-- JURUSAN -->
<div class="jurusan">

    <h2>JURUSAN</h2>

    <div class="grid">

        <div class="card">
            <img src="{{ asset('images/tkj.jpeg') }}" alt="TKJ">
            <h4>TKJ</h4>
            <p>Teknik Komputer & Jaringan</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/rpl.jpeg') }}" alt="RPL">
            <h4>RPL</h4>
            <p>Rekayasa Perangkat Lunak</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/dkv.jpeg') }}" alt="DKV">
            <h4>DKV</h4>
            <p>Desain Komunikasi Visual</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/aph.jpeg') }}" alt="ATPH">
            <h4>ATPH</h4>
            <p>Agribisnis Tanaman Pangan & Hortikultura</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/apt.jpeg') }}" alt="APT">
            <h4>APT</h4>
            <p>Agribisnis Pembenihan Tanaman</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/tsm.jpeg') }}" alt="TSM">
            <h4>TSM</h4>
            <p>Teknik Sepeda Motor</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/tkr.jpeg') }}" alt="TKR">
            <h4>TKR</h4>
            <p>Teknik Kendaraan Ringan</p>
        </div>

    </div>

</div>

<!-- BERITA -->
<div class="berita">

<div class="container">

    <div class="title">BERITA SMKN 8 JEMBER</div>

    <!-- BERITA 1 -->
    <div class="berita-grid">

        <div class="poster">
            <div class="label">SMK NEGERI 8 JEMBER</div>
            <img src="{{ asset('images/images1.jpeg') }}">
        </div>

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

    <!-- BERITA 2 -->
    <div class="bottom">

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

        <div class="poster">
            <div class="label">SMK NEGERI 8 JEMBER</div>
            <img src="{{ asset('images/images2.jpeg') }}">
        </div>

    </div>

    <!-- BERITA 3 -->
    <div class="berita-grid" style="margin-top:20px;">

        <div class="poster">
            <div class="label">SMK NEGERI 8 JEMBER</div>
            <img src="{{ asset('images/images3.jpeg') }}">
        </div>

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

    <!-- BERITA 4 -->
    <div class="bottom">

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

        <div class="poster">
            <div class="label">SMK NEGERI 8 JEMBER</div>
            <img src="{{ asset('images/images4.jpeg') }}">
        </div>

    </div>

    <div class="footer">SMKN 8 JEMBER – WE STOPT!</div>

</div>
</div>

<!-- GALERI -->
<div class="galeri">

    <h2>GALERI SMKN 8 JEMBER</h2>

    <div class="galeri-grid">

        <div class="card">
            <img src="{{ asset('images/galeri1.jpg') }}" alt="galeri">
        </div>

        <div class="card">
            <img src="{{ asset('images/galeri2.jpg') }}" alt="galeri">
        </div>

        <div class="card">
            <img src="{{ asset('images/galeri3.jpg') }}" alt="galeri">
        </div>

        <div class="card">
            <img src="{{ asset('images/galeri4.jpg') }}" alt="galeri">
        </div>

        <div class="card">
            <img src="{{ asset('images/galeri5.jpg') }}" alt="galeri">
        </div>

        <div class="card">
            <img src="{{ asset('images/galeri6.jpg') }}" alt="galeri">
        </div>

    </div>

</div>

<!-- TAMBAHKAN DI BAWAH SECTION GALERI -->

<!-- PENGUMUMAN -->
<div class="pengumuman">

    <div class="header-pengumuman">
        PENGUMUMAN SMKN 8 JEMBER
    </div>

    <div class="container-pengumuman">

        <!-- PENGUMUMAN 1 -->
        <div class="beasiswa">

            <div class="beasiswa-left">
                <p>SELAMAT & SUKSES</p>
                <p>kepada peserta didik yang menerima beasiswa</p>
                <h3>Smart Scholarship YBM BRILian SBO MALANG</h3>
            </div>

            <div class="beasiswa-right">
                <img src="{{ asset('images/image.png') }}" alt="foto pengumuman">
                <div class="nama">Hj. Nurhidana, S.Pd., M.Pd</div>
            </div>

        </div>

        <div class="foto-pengumuman">
            <img src="{{ asset('images/foto1.jpg') }}" alt="foto pengumuman">
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

            <img src="{{ asset('images/foto1.jpg') }}" alt="foto purna tugas">

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

        <!-- PENGUMUMAN 2 -->
        <div class="beasiswa" style="margin-top:40px;">

            <div class="beasiswa-left">
                <p>SELAMAT & SUKSES</p>
                <p>kepada peserta didik yang menerima beasiswa</p>
                <h3>Smart Scholarship YBM BRILian SBO MALANG</h3>
            </div>

            <div class="beasiswa-right">
                <img src="{{ asset('images/image.png') }}" alt="foto pengumuman">
                <div class="nama">Hj. Nurhidana, S.Pd., M.Pd</div>
            </div>

        </div>

        <div class="foto-pengumuman">
            <img src="{{ asset('images/foto1.jpg') }}" alt="foto pengumuman">
        </div>

        <div class="deskripsi">

            <b>ESKALASI DAN PERSEMBAHAN</b><br><br>

            Alhamdulillah peserta didik lulus seleksi dan berhak menerima beasiswa Smart Scholarship YBM BRILian SBO Malang.
            Program ini memberikan pembinaan secara berkala, bimbingan serta pelatihan guna membentuk SDM yang unggul,
            berkarakter, dan memiliki kompetensi yang baik.

            <br><br>
            SMKN 8 Jember, was toppp!!

        </div>

    </div>

</div>

<!-- CSS TAMBAHKAN DI STYLE -->

<style>

/* PENGUMUMAN */
.pengumuman{
    background:#983305;
    padding-bottom:50px;
}

.header-pengumuman{
    background:rgb(251, 116, 58);
    color:white;
    font-weight:bold;
    font-size:24px;
    text-align:center;
    padding:18px;
    letter-spacing:2px;
}

.container-pengumuman{
    max-width:920px;
    margin:30px auto;
    padding:20px;
}

/* KOTAK PENGUMUMAN */
.beasiswa{
    background:#fff5f1;
    border:3px solid #e05e27;
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

/* FOTO */
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
    border:2px solid rgb(251, 116, 58);
    color:#4d2e20;
    line-height:1.5;
}

/* PURNA TUGAS */
.purna-tugas{
    margin-top:40px;
    background:#fff5f1;
    border:3px solid rgb(251, 116, 58);
    border-radius:8px;
    display:flex;
    gap:20px;
    padding:20px;
}

.purna-tugas img{
    width:150px;
    height:150px;
    border-radius:8px;
    border:3px solid rgb(251, 116, 58);
    object-fit:cover;
}

.info{
    flex:1;
}

.info h2{
    color:#b4552b;
    margin-bottom:8px;
}

.info p{
    margin-top:10px;
    line-height:1.5;
}

/* RESPONSIVE */
@media(max-width:768px){

    .beasiswa,
    .purna-tugas{
        flex-direction:column;
        text-align:center;
    }

}

</style>

<script>
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    card.addEventListener('click', () => {
        card.classList.toggle('active');
    });
});
</script>

</body>
</html>