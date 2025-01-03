<!DOCTYPE html>
<html>

<head>
    <title>Daftar Items</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>

<body>
    <div class="container mt-1">
        <h1 class="text-center mb-2">Daftar Items</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif


        <form method="GET">
            <div class="input-group mb-3">
                <input type="text" name="title" value="{{ $searchTitle }}" class="form-control" placeholder="Search title" aria-label="Search title" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
              </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No Ruangan</th>
                        <th>Nama Lab</th>
                        <th>Kapasitas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($ruangans->count() == 0)
                    <tr>
                        <td colspan="4" class="text-center">Data tidak ditemukan</td>
                    </tr>
                    @endif

                    @foreach ($ruangans as $ruangan)
                    <tr>
                        <td>{{ $ruangan->No_ruangan }}</td>
                        <td>{{ $ruangan->Nama_lab }}</td>
                        <td>{{ $ruangan->Kapasitas_orang }}</td>
                        <td>
                            <a href="{{ url('ruangan/'.$ruangan->No_ruangan.'/view') }}">view</a>
                            <a href="{{ url('ruangan/'.$ruangan->No_ruangan.'/edit') }}"> | edit | </a>
                            <a href="{{ url('ruangan/'.$ruangan->No_ruangan.'/delete') }}">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $ruangans->links() }}
    </div>
    <div class="mt-5"></div>
</body>

</html>