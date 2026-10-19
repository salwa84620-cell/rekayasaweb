<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<body>

    <h1>Data Barang</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->harga }}</td>
                </tr>
            @endforeach

            @if (session('success'))
                <p>
                    {{ session('success') }}
                </p>
            @endif
                <a href="/barang/create">
                    + Tambah Barang
                </a>

        <h3>Pencarian Data Barang</h3>
            <form action="/barang" method="GET">
                <input 
                    type="text"
                    name="cari"
                    placeholder="Masukan nama barang . . ." 
                    value="{{ $keyword ?? '' }}"
                >
                <button type="submit">Cari</button>
                <a href="/barang">Reset</a>
            </form>
                
        </tbody>
    </table>

</body>
</html>