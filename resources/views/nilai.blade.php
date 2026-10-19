
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>

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

        p {
            font-size: 18px;
            margin: 15px 0;
        }

        body > p,
        body > h1 {
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        body > p {
            background-color: white;
            padding: 18px;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>

    <h1>Hasil Nilai</h1>

    <p>Nilai: {{ $nilai }}</p>

    @if ($nilai >= 80)
        <p>Predikat: A</p>
    @elseif ($nilai >= 70)
        <p>Predikat: B</p>
    @elseif ($nilai >= 60)
        <p>Predikat: C</p>
    @else
        <p>Predikat: D</p>
    @endif

</body>
</html>
