<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 8 JEMBER</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e6b97a;
            padding: 10px 30px;
            flex-wrap: wrap;
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
            font-weight: bold;
            gap: 10px;
        }

        .logo img {
            width: 40px;
            height: 40px;
        }

        .menu {
            display: flex;
            list-style: none;
            gap: 20px;
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

        /* HERO */
        .hero {
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* JURUSAN SECTION */
        .container {
            padding: 30px;
            text-align: center;
            background-color: #e6b86a;
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
            border-radius: 6px;
        }

        .card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 4px;
        }

        .card h4 {
            margin: 10px 0 5px;
        }

        .card p {
            font-size: 12px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 10px;
            }

            .menu {
                flex-direction: column;
                align-items: center;
            }

            .hero {
                height: 300px;
            }

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
        <img src="{{ asset('images/lobbysmk.jpeg') }}" alt="lobby sekolah">
    </div>

</body>

</html>