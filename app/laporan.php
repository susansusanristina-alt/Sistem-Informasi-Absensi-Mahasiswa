<?php
include "koneksi.php";

$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>

<title>Laporan Data Mahasiswa</title>

<style>

body{
    font-family:Arial;
    background:#f5f5f5;
}

.container{
    width:90%;
    margin:auto;
}

h2{
    text-align:center;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#0066cc;
    color:white;
    padding:10px;
}

table td{
    padding:10px;
    text-align:center;
}

@media print{

button{
display:none;
}

}

</style>

</head>

<body>

<div class="container">

<h2>LAPORAN DATA MAHASASISWA</h2>

<button onclick="window.print()">
Cetak Laporan
</button>

<br><br>

<table border="1">

<tr>

<th>No</th>

<th>NIM</th>

<th>Nama</th>

<th>Program Studi</th>

<th>Angkatan</th>

</tr>

<?php

$no=1;

while($d=mysqli_fetch_array($data))
{

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nim']; ?></td>

<td><?= $d['nama']; ?></td>

<td><?= $d['prodi']; ?></td>

<td><?= $d['angkatan']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>