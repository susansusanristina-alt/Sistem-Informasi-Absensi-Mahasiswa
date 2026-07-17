<?php

include "koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

mysqli_query($koneksi, "UPDATE mahasiswa SET
nim='$nim',
nama='$nama',
prodi='$prodi',
angkatan='$angkatan'
WHERE id_mahasiswa='$id'");

echo "<script>
alert('Data berhasil diupdate');
window.location='index.php';
</script>";

?>