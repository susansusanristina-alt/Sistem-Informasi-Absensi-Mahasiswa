USE db_sistem_absensi_mahasiswa;

-- JOIN
SELECT
    m.nim,
    m.nama,
    k.nama_kelas,
    mk.nama_matkul,
    a.tanggal,
    a.status
FROM absensi a
JOIN mahasiswa m ON a.id_mahasiswa = m.id_mahasiswa
JOIN kelas k ON a.id_kelas = k.id_kelas
JOIN mata_kuliah mk ON k.id_matkul = mk.id_matkul;

-- COUNT
SELECT COUNT(*) AS jumlah_mahasiswa
FROM mahasiswa;

-- GROUP BY
SELECT
    status,
    COUNT(*) AS jumlah
FROM absensi
GROUP BY status;

-- AVG
SELECT AVG(sks) AS rata_rata_sks
FROM mata_kuliah;