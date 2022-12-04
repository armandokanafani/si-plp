<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Tambah Data Sekolah</h1> <br> <br>
    <form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
        @csrf
        @method('PUT')
        Nama Sekolah <input type="text" name="nama_sekolah" value="{{ $sekolah->nama_sekolah }}"> <br>
        Alamat Sekolah <input type="text" name="alamat_sekolah" value="{{ $sekolah->alamat_sekolah }}"> <br>
        Keminaan <input type="text" name="keminatan" value="{{ $sekolah->keminatan }}"> <br>
        Kepala Sekolah <input type="text" name="kepala_sekolah" value="{{ $sekolah->kepala_sekolah }}"> <br>
        Guru Pamong <input type="text" name="guru_pamong" value="{{ $sekolah->guru_pamong }}"> <br> 
        <button type="submit">Submit</button>
    </form>
</body>
</html>