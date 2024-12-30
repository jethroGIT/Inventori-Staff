<!DOCTYPE html>
<html>

<head>
    <title>Daftar Items</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Items</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No Inventaris</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Merk Barang</th>
                        <th>Stock Barang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->No_inventaris }}</td>
                        <td>{{ $barang->Nama_barang }}</td>
                        <td>{{ $barang->Jenis_barang }}</td>
                        <td>{{ $barang->Merk_barang }}</td>
                        <td>{{ $barang->Stock_barang }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>