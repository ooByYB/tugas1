<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
</head>
<body>
<form action="{{ route('get_buku') }}">
    <h1>Data Petugas</h1>
        <label for="id_petugas">ID Petugas</label>
        <br>
        <input type="text" name="id_petugas" id="id_petugas">
        <br><br>
        <label for="nama_petugas">Nama Petugas</label>
        <br>
        <input type="text" name="nama_petugas" id="nama_petugas">
        <br><br>
        <label for="jabatan">Jabatan</label>
        <br>
        <input type="text" name="jabatan" id="jabatan">
        <br><br>
        <label for="no_telp">No. Telepon</label>
        <br>
        <input type="number" name="no_telp" id="no_telp">
        <br><br>
        <label for="alamat">Alamat</label>
        <br>
        <textarea name="alamat" id="alamat"></textarea>
        <br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>