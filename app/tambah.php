<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.form{
    width:450px;
    margin:40px auto;
    background:white;
    padding:20px;
    border-radius:10px;
}

input{
    width:100%;
    padding:10px;
    margin-top:8px;
    margin-bottom:15px;
}

button{
    padding:10px 20px;
    background:#0066cc;
    color:white;
    border:none;
}

a{
    text-decoration:none;
}

</style>

</head>

<body>

<div class="form">

<h2>Tambah Mahasiswa</h2>

<form action="simpan.php" method="POST">

<label>NIM</label>

<input type="text" name="nim" required>

<label>Nama</label>

<input type="text" name="nama" required>

<label>Program Studi</label>

<input type="text" name="prodi" required>

<label>Angkatan</label>

<input type="number" name="angkatan" required>

<button type="submit">
Simpan
</button>

<a href="index.php">
Kembali
</a>

</form>

</div>

</body>
</html>