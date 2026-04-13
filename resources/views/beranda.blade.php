<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 8 Jember</title>

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

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e6b97a;
            padding: 10px 30px;
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

        /* Hero Image */
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

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }

            .menu {
                flex-direction: column;
                margin: 10px 0;
            }

            .hero {
                height: 300px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
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

    <!-- Hero (Foto Lobby Sekolah) -->
    <div class="hero">
         <img src="{{ asset('images/lobbysmk.jpeg') }}" alt="lobby">
    </div>

</body>
</html>