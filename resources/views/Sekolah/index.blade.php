<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home CRUD Sekolah</title>
</head>
<body>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
        <h1>DAFTAR NAMA SEKOLAH</h1>
        <a href="{{ route('sekolah.create') }}">Tambah Sekolah</a>
        <table>
            <tr>
                <td>No</td>
                <td>Nama Sekolah</td>
                <td>Alamat</td>
                <td>Kepala Sekolah</td>
                <td>Guru Pamong</td>
                <td>Keminatan</td>
                <td>Aksi</td>
            </tr>
            @php $i = 0; @endphp
            @foreach ($sekolahs as $sekolah)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sekolah->nama_sekolah }}</td>
                <td>{{ $sekolah->alamat_sekolah }}</td>
                <td>{{ $sekolah->kepala_sekolah }}</td>
                <td>{{ $sekolah->guru_pamong }}</td>
                <td>{{ $sekolah->keminatan }}</td>
                <td>
                    <form action="{{ route('sekolah.destroy', $sekolah->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('sekolah.show',$sekolah->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('sekolah.edit',$sekolah->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>