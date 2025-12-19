<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lusmana Catering</title>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', sans-serif;
            background: #1c1c1c;
            color: #f5f5f5;
        }

        header {
            background: #3e2723;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            color: #d7ccc8;
        }

        nav a {
            color: #efebe9;
            margin-right: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            flex: 1; /* KUNCI FOOTER DI BAWAH */
        }

        .container {
            padding: 30px;
        }

        .card {
            background: #2e2e2e;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        footer {
            background: #3e2723;
            text-align: center;
            padding: 15px;
            color: #bcaaa4;
        }
    </style>
</head>
<body>

    <header>
        <h1>Lusmana Catering</h1>
        <nav>
            <a href="/">Beranda</a>
            <a href="/menu">Menu</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        © {{ date('Y') }} Lusmana Catering
    </footer>

</body>
</html>
