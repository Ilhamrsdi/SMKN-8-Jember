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

/* SECTION PROFIL */
.profil{
    padding:40px 20px 80px;
    min-height:100vh;
    background:linear-gradient(to bottom, #FF9E62, #B25E39);
}

/* TITLE */
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

/* SECTION JURUSAN */
.jurusan{
    padding:50px 20px 80px;
    background:#f5f5f5;
}

.jurusan h2{
    text-align:center;
    margin-bottom:40px;
    color:#B25E39;
}

/* RESPONSIVE */
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

    .grid{
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

<style>
/* SECTION JURUSAN */
.jurusan{
    padding:40px 20px 80px;
    min-height:100vh;
    background:linear-gradient(to bottom, #FF9E62, #B25E39);
}

.jurusan h2{
    text-align:center;
    color:white;
    margin-bottom:30px;
    letter-spacing:1px;
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