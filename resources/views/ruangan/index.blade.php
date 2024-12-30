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
                        <th>No Ruangan</th>
                        <th>Nama Lab</th>
                        <th>Kapasitas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ruangans as $ruangan)
                    <tr>
                        <td>{{ $ruangan->No_ruangan }}</td>
                        <td>{{ $ruangan->Nama_lab }}</td>
                        <td>{{ $ruangan->Kapasitas_orang }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>