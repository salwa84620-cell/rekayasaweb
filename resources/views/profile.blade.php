
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b3e8f1;
            color: #333;
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 30px;
        }

        body {
            line-height: 1.6;
        }

        p {
            background-color: white;
            max-width: 500px;
            margin: 15px auto;
            padding: 16px 20px;
            border-radius: 8px;
            border-left: 5px solid #2563eb;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h1>Profile</h1>

    <p>Nama: {{$nama}}</p>
    <p>Profesi: {{$profesi}}</p>
    <p>NIM: {{$nim}}</p>
    <p>Jurusan: {{$jurusan}}</p>

</body>
</html>
