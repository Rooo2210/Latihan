<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio Roo')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #ffffffff, #5fecff);
            font-family: 'Poppins', sans-serif;
            color: #2c3e50;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* ===== NAVBAR ===== */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px 40px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 35px;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #2c3e50;
            font-size: 16px;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        nav ul li a:hover {
            background: #4a6fa5;
            color: white;
            transform: translateY(-2px);
        }

        nav ul li a.active {
            background: linear-gradient(90deg, #4a6fa5, #7a9bc2);
            color: white;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            nav {
                padding: 15px 20px;
            }
            
            nav ul {
                gap: 15px;
                flex-wrap: wrap;
            }
            
            nav ul li a {
                font-size: 14px;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">Tentang</a></li>
            <li><a href="{{ route('project') }}" class="{{ Request::routeIs('project') ? 'active' : '' }}">Proyek</a></li>
            <li><a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer style="text-align: center; padding: 30px 20px; color: #5f6b7a; font-size: 14px;">
        <p>&copy; 2025 Roo Portfolio. Dibuat dengan ❤️ menggunakan Laravel.</p>
    </footer>
</body>
</html>