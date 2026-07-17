USE db_sistem_absensi_mahasiswa;

-- ==========================
-- Contoh COMMIT
-- ==========================
START TRANSACTION;

INSERT INTO mahasiswa (nim, nama, prodi, angkatan)
VALUES ('IK2511100', 'Mahasiswa Baru', 'Sistem Informasi', 2025);

COMMIT;

-- ==========================
-- Contoh ROLLBACK
-- ==========================
START TRANSACTION;

DELETE FROM mahasiswa
WHERE nim = 'IK2511100';

ROLLBACK;