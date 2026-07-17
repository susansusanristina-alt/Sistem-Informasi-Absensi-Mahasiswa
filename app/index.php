<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Informasi Absensi Mahasiswa</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f0f4f8;
}

.container{
    width:90%;
    margin:30px auto;
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#0d6efd;
    margin-bottom:20px;
}

.btn{
    display:inline-block;
    background:#0d6efd;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:6px;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    background:#084298;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table th{
    background:#0d6efd;
    color:white;
    padding:12px;
}

table td{
    padding:10px;
    border:1px solid #ddd;
    text-align:center;
}

table tr:nth-child(even){
    background:#f8f9fa;
}

table tr:hover{
    background:#dbeafe;
}

.edit{
    background:#198754;
    color:white;
    padding:7px 12px;
    text-decoration:none;
    border-radius:5px;
}

.edit:hover{
    background:#157347;
}

.hapus{
    background:#dc3545;
    color:white;
    padding:7px 12px;
    text-decoration:none;
    border-radius:5px;
}

.hapus:hover{
    background:#bb2d3b;
}

.footer{
    margin-top:20px;
    text-align:center;
    color:#777;
    font-size:14px;
}

</style>

<script>
function konfirmasiHapus(){
    return confirm("Yakin ingin menghapus data ini?");
}
</script>

</head>

<body>

<div class="container">

<h2>SISTEM INFORMASI ABSENSI MAHASISWA</h2>

<a href="tambah.php" class="btn">+ Tambah Mahasiswa</a>

<table>

<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Prodi</th>
<th>Angkatan</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
while($data=mysqli_fetch_array($query)){
?>

<tr>

<td><?= $no++; ?></td>

<td><?= $data['nim']; ?></td>

<td><?= $data['nama']; ?></td>

<td><?= $data['prodi']; ?></td>

<td><?= $data['angkatan']; ?></td>

<td>

<a class="edit"
href="edit.php?id=<?= $data['id_mahasiswa']; ?>">
Edit
</a>

<a class="hapus"
onclick="return konfirmasiHapus()"
href="hapus.php?id=<?= $data['id_mahasiswa']; ?>">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

<div class="footer">
<p>© 2026 Sistem Informasi Absensi Mahasiswa</p>
</div>

</div>

</body>
</html>