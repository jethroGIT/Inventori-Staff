<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Ruangan</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h1>Detail Barang</h1>
            </div>
            <div class="card-body">
                <h2 class="text-secondary">No Inventaris: {{ $detailBarang->No_inventaris }}</h2>
                <h2 class="text-info">Nama Barang: {{ $detailBarang->Nama_barang }}</h2>
                <h2 class="fw-bold">Jenis Barang: {{ $detailBarang->Jenis_barang }}</h2>
                <h2 class="fw-bold">Merk Barang: {{ $detailBarang->Merk_barang }}</h2>
                <h2 class="fw-bold">Stock Barang: {{ $detailBarang->Stock_barang }}</h2>
            </div>
            <div class="card-footer text-center">
                <a href="{{ url('barang') }}" class="btn btn-outline-primary">Kembali</a>
            </div>
        </div>
    </div>

    <!-- Tambahkan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
