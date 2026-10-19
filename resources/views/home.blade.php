
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b3e8f1;
            color: #333;
            margin: 0;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #2563eb;
            font-size: 32px;
            margin-bottom: 15px;
        }

        p {
            text-align: center;
            font-size: 18px;
            margin-bottom: 35px;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            margin: 0 auto;
        }

        nav a {
            text-decoration: none;
            color: white;
            background-color: #2563eb;
            padding: 12px 18px;
            border-radius: 6px;
            font-size: 15px;
            transition: 0.3s;
        }

        nav a:hover {
            background-color: #1e40af;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <h2>Halaman home</h2>
    <p>Selamat Belajar Pemrograman Laravel</p>

    <nav>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
        <a href="/profile">Profile</a>
        <a href="/barang">Barang</a>
        <a href="/nilai">Nilai</a>
    </nav>
</body>
</html>
