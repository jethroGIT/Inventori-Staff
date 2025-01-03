<!DOCTYPE html>
<html>

<head>
    <title>Daftar Items</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-1">
        <h1 class="text-center mb-4">Daftar Items</h1>

        <a href="{{ url('/barang/create') }}" class="btn btn-primary mb-3">Tambah Item</a>

        <form method="GET">
            <div class="input-group mb-3">
                <input type="text" name="title" value="{{ $id }}" class="form-control" placeholder="Search title" aria-label="Search title" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
              </div>
        </form>
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No Inventaris</th>
                        <th>Nama Barang</th>
                        <th>Stock Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($barangs->count() == 0)
                    <tr>
                        <td colspan="3" class="text-center">Data tidak ditemukan</td>
                    </tr>
                    @endif

                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->No_inventaris }}</td>
                        <td>{{ $barang->Nama_barang }}</td>
                        <td>{{ $barang->Stock_barang }}</td>
                        <td>
                            <a href="{{ url('barang/'.$barang->No_inventaris.'/view') }}">view</a>
                            <a href="{{ url('barang/'.$barang->No_inventaris.'/edit') }}"> | edit | </a>
                            <a href="{{ url('barang/'.$barang->No_inventaris.'/destroy') }}">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $barangs->links() }}
    </div>

</body>

</html>