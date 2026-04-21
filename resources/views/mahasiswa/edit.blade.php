<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>

<h1>Edit Data Mahasiswa</h1>

<form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
    @csrf
    @method('PUT')

    Nama:
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br><br>

    NIM:
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br><br>

    Jurusan:
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>