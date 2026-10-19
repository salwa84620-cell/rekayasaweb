
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Contact</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3994f0;
            color: #333;
            margin: 0;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #eff1f5;
            margin-bottom: 30px;
        }

        pre {
            font-family: Arial, sans-serif;
            background-color: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            white-space: pre-wrap;
        }

        input[type="text"],
        textarea {
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
        }

        input[type="submit"] {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>

<body>
    <h2>Contact us</h2>

    <form action="/contact" method="GET">
        <pre>
            Nama : <input type="text" name="nm" size="20"
            placeholder="inputkan nama" required>
            Alamat:
                    <textarea cols="20" rows="3" name="alamat"
                    required></textarea>

                    <input type="submit" name="submit" value="PROSES">
        </pre>
    </form>

    @if (request()->has('submit'))
        <h2>Hasil Input</h2>

        <pre>
            Nama   : {{ request('nm') }}
            Alamat : {{ request('alamat') }}
        </pre>
    @endif

</body>
</html>

</html>
