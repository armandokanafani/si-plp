<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Sekolah</title>
</head>
<body>
    <h1>Tambah Data Sekolah</h1> <br> <br>
    <form action="{{ route('sekolah.store') }}" method="POST" >
        @csrf
        Nama Sekolah <input type="text" name="nama_sekolah"> <br>
        Alamat Sekolah <input type="text" name="alamat_sekolah"> <br>
        Keminaan <input type="text" name="keminatan"> <br>
        Kepala Sekolah <input type="text" name="kepala_sekolah"> <br>
        Guru Pamong <input type="text" name="guru_pamong"> <br> 
        <button type="submit">Submit</button>
    </form>
</body>
</html>