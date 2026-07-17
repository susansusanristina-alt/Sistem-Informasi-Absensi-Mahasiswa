<?php

include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

if($nim=="" || $nama=="" || $prodi=="" || $angkatan=="")
{
    echo "<script>
    alert('Data tidak boleh kosong');
    window.location='tambah.php';
    </script>";
}
else
{

mysqli_query($koneksi,"INSERT INTO mahasiswa
(nim,nama,prodi,angkatan)

VALUES

('$nim','$nama','$prodi','$angkatan')");

echo "<script>

alert('Data berhasil disimpan');

window.location='index.php';

</script>";

}

?>