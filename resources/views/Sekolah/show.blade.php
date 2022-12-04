<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show per Sekolah</title>
</head>
<body>
    <h1>Detail dari {{ $sekolah->nama_sekolah }} </h1> <br>
    Nama Sekolah : {{ $sekolah->nama_sekolah }} <br>
    Alamat Sekolah : {{ $sekolah->alamat_sekolah }} <br>
    Kepala Sekolah : {{ $sekolah->kepala_sekolah }} <br>
    Guru Pamong : {{ $sekolah->guru_pamong }} <br>
    Keminatan : {{ $sekolah->keminatan }} <br>
</body>
</html>