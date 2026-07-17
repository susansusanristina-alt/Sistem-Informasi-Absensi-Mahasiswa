<?php

include "koneksi.php";

$id=$_GET['id'];

$data=mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'");

$d=mysqli_fetch_array($data);

?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Mahasiswa</title>

<style>

body{

font-family:Arial;

background:#f4f4f4;

}

.form{

width:450px;

margin:auto;

background:white;

padding:20px;

margin-top:30px;

}

input{

width:100%;

padding:10px;

margin-bottom:15px;

}

button{

padding:10px 20px;

background:green;

color:white;

border:none;

}

</style>

</head>

<body>

<div class="form">

<h2>Edit Mahasiswa</h2>

<form action="update.php" method="POST">

<input type="hidden"

name="id"

value="<?php echo $d['id_mahasiswa']; ?>">

<label>NIM</label>

<input

type="text"

name="nim"

value="<?php echo $d['nim']; ?>"

required>

<label>Nama</label>

<input

type="text"

name="nama"

value="<?php echo $d['nama']; ?>"

required>

<label>Program Studi</label>

<input

type="text"

name="prodi"

value="<?php echo $d['prodi']; ?>"

required>

<label>Angkatan</label>

<input

type="number"

name="angkatan"

value="<?php echo $d['angkatan']; ?>"

required>

<button>

Update

</button>

</form>

</div>

</body>

</html>