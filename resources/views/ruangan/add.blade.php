<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
            margin: 0 auto;
        }
        td, th {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            width: 100px;
        }
        button {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tambah Ruangan</h1>

    <form action="{{ url('ruangan/create') }}" method="POST">
        @csrf
        <table>
            @if ($errors->any())
            <tr>
                <td colspan="2" class="text-center">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </td>
            </tr>
            @endif
            <tr>
                <th><label for="nomor_ruangan">Nomor Ruangan:</label></th>
                <td><input type="text" name="No_ruangan" value="{{ old('No_ruangan') }}"></td>
            </tr>
            <tr>
                <th><label for="nama_lab">Nama Lab:</label></th>
                <td><input type="text" name="Nama_lab" value="{{ old('Nama_lab') }}"></td>
            </tr>
            <tr>
                <th><label for="kapasitas">Kapasitas:</label></th>
                <td><input type="number" name="Kapasitas_orang" value={{ old('Kapasitas_orang') }}></td>
            </tr>
        </table>
        <button type="submit">Tambah Ruangan</button>
    </form>
</body>
</html>
