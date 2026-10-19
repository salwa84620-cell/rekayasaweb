
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barang</title>

    
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #b3e8f1;
        color: #333;
        margin: 0;
        padding: 40px;
    }

    h1 {
        color: #2563eb;
        text-align: center;
        margin-bottom: 20px;
    }

    a {
        display: inline-block;
        background-color: #2563eb;
        color: white;
        padding: 10px 16px;
        margin-bottom: 15px;
        border-radius: 6px;
        text-decoration: none;
    }

    a:hover {
        background-color: #1d4ed8;
    }

    table {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        background-color: white;
        border-collapse: collapse;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    th {
        background-color: #2563eb;
        color: white;
    }

    th, td {
        padding: 14px;
        border: 1px solid #cbd5e1;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #eff6ff;
    }
</style>

</head>
<body>

    <h1>Data Barang</h1>

    <ul>
        @foreach ($barangs as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

</body>
</html>
