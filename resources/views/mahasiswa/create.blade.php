<h2>Tambah Data</h2>

<form action="/mahasiswa" method="POST">
@csrf
<input type="text" name="nama" placeholder="Nama"><br>
<input type="text" name="nim" placeholder="NIM"><br>
<input type="text" name="jurusan" placeholder="Jurusan"><br>
<button type="submit">Simpan</button>
</form>