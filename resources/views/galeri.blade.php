<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 8 Jember - Berita & Galeri</title>

    <style>
        /* RESET & BASE STYLES */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f39c6b;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e6b97a;
            padding: 10px 30px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
            font-weight: bold;
        }

        .logo img {
            width: 40px;
            margin-right: 10px;
        }

        .menu {
            display: flex;
            list-style: none;
        }

        .menu li {
            margin: 0 15px;
        }

        .menu li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
        }

        .menu li a:hover {
            text-decoration: underline;
        }

        .login-btn {
            background-color: white;
            color: #e6b97a;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        /* HERO SECTION */
        .hero {
            width: 100%;
            height: 450px;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* SECTION HEADERS */
        .section-title {
            text-align: center;
            color: #fff;
            font-size: 2.2rem;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 30px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        /* CONTAINER UMUM */
        .container {
            max-width: 1100px;
            margin: auto;
            padding: 60px 20px;
        }

        /* --- BERITA SECTION --- */
        .news-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 40px;
        }

        .box {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .poster {
            background: #7b2cbf;
            padding: 15px;
            border-radius: 10px;
            color: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .poster img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .poster .label {
            background: #5a189a;
            padding: 6px;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .text p {
            font-size: 14px;
            text-align: justify;
            margin-bottom: 12px;
            color: #333;
        }

        .text b {
            font-size: 16px;
            color: #000;
            display: block;
            margin-bottom: 10px;
        }

        .slogan {
            font-weight: bold;
            color: #7b2cbf !important;
            margin-top: 10px;
        }

        /* --- GALERI SECTION --- */
        .galeri-wrapper {
            background: linear-gradient(to bottom, #FF9E62, #E54500);
            padding: 80px 0;
            width: 100%;
        }

        .grid-galeri {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 35px;
            max-width: 1000px;
            margin: auto;
        }

        .card {
            background: #e6e6e6;
            padding: 10px;
            border-radius: 5px;
            border: 5px solid #ddd;
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 3px;
        }

        .card.active {
            transform: scale(1.05);
            box-shadow: 0 12px 25px rgba(0,0,0,0.4);
            z-index: 2;
            position: relative;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 40px 20px;
            background: #E54500;
            color: white;
            font-weight: bold;
            border-top: 1px solid rgba(255,255,255,0.3);
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .grid-galeri {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .menu {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            .hero {
                height: 250px;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .news-grid .poster {
                order: -1;
            }

            .grid-galeri {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- 1. NAVBAR -->
    <nav class="navbar">
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
    </nav>

    <!-- 2. HERO -->
    <div class="hero">
        <img src="{{ asset('images/lobbysmk.jpeg') }}" alt="Lobby SMKN 8 Jember">
    </div>

    <!-- 3. BERITA SECTION -->
    <section class="container">
        <h2 class="section-title">Berita Terkini</h2>

        <!-- Berita 1 -->
        <div class="news-grid">
            <div class="poster">
                <div class="label">SMK NEGERI 8 JEMBER</div>
                <img src="{{ asset('images/images1.jpeg') }}" alt="BIT MoU">
            </div>
            <div class="box text">
                <p><b>A Landmark Partnership: SMKN 8 Jember and BIT</b></p>
                <p>SMK Negeri 8 Jember resmi menjalin kerja sama internasional melalui penandatanganan MoU dengan Beijing Institute of Technology (BIT).</p>
                <p>Kerja sama ini membuka peluang besar bagi peserta didik untuk mengembangkan kompetensi global dan beasiswa internasional.</p>
                <p class="slogan">SMKN 8 JEMBER – WE STOPT!</p>
            </div>
        </div>

        <!-- Berita 2 -->
        <div class="news-grid">
            <div class="box text">
                <p><b>Upacara Bendera: Hari Pahlawan Nasional 2025</b></p>
                <p>Senin, 10 November 2025, SMK Negeri 8 Jember menggelar upacara bendera khidmat sebagai momentum pengingat cinta tanah air.</p>
                <p>Upacara diikuti oleh seluruh warga sekolah dengan penuh semangat nasionalisme.</p>
                <p class="slogan">SMKN 8 JEMBER – WE STOPT!</p>
            </div>
            <div class="poster">
                <div class="label">SMK NEGERI 8 JEMBER</div>
                <img src="{{ asset('images/images2.jpeg') }}" alt="Hari Pahlawan">
            </div>
        </div>
    </section>

    <!-- 4. GALERI SECTION -->
    <section class="galeri-wrapper">
        <div class="container">
            <h2 class="section-title">Galeri Sekolah</h2>
            
            <div class="grid-galeri">
                <div class="card">
                    <img src="{{ asset('images/galeri1.jpg') }}" alt="galeri 1">
                </div>
                <div class="card">
                    <img src="{{ asset('images/galeri2.jpg') }}" alt="galeri 2">
                </div>
                <div class="card">
                    <img src="{{ asset('images/galeri3.jpg') }}" alt="galeri 3">
                </div>
                <div class="card">
                    <img src="{{ asset('images/galeri4.jpg') }}" alt="galeri 4">
                </div>
                <div class="card">
                    <img src="{{ asset('images/galeri5.jpg') }}" alt="galeri 5">
                </div>
                <div class="card">
                    <img src="{{ asset('images/galeri6.jpg') }}" alt="galeri 6">
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER -->
    <footer class="footer">
        &copy; 2026 SMKN 8 JEMBER | All Rights Reserved
    </footer>

    <!-- 6. SCRIPT -->
    <script>
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('click', () => {
                // Menghapus class active dari card lain (opsional)
                // cards.forEach(c => c.classList.remove('active')); 
                card.classList.toggle('active');
            });
        });
    </script>
</body>
</html>