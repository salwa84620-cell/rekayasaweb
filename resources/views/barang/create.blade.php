<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Barang</title>
</head>
<body>
    
    <h1>Tambah Data Barang</h1>

    @if ($errors->any())
        <div>
            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/barang" , method="POST">

        @csrf

        <div>
            <label>Nama Barang</label>
            <br>
            <input type="text"
                   name="nama_barang"
                   value="{{ old('nama_barang') }}"
            >
        </div>
            <br>
        <div>
            <label>stok</label>
            <br>
            <input type="number"
                   name="stok"
                   value="{{ old('stok') }}"
            >
        </div>
            <br>
        <div>
            <label>harga</label>
            <br>
            <input type="number"
                   name="harga"
                   value="{{ old('harga') }}"
            >
        </div>

        <button type="submit">Simpan</button>
        <a href="/barang">Kembali</a>
    </form>
</body>
</html>