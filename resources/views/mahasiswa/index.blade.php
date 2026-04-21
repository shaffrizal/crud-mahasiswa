<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa</h1>

<a href="/mahasiswa/create">Tambah Data</a>

<table border="1" cellpadding="10">
<tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Jurusan</th>
    <th>Aksi</th>
</tr>

@foreach($mahasiswa as $m)
<tr>
    <td>{{ $m->nama }}</td>
    <td>{{ $m->nim }}</td>
    <td>{{ $m->jurusan }}</td>
    <td>

        <a href="/mahasiswa/{{ $m->id }}/edit">Edit</a>

        <form action="/mahasiswa/{{ $m->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>

    </td>
</tr>
@endforeach

</table>

</body>
</html>