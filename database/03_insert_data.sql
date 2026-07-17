USE db_sistem_absensi_mahasiswa;

-- ==========================
-- Data Mahasiswa
-- ==========================
INSERT INTO mahasiswa (nim, nama, prodi, angkatan) VALUES
('IK2511056', 'Alif Mubarok', 'Sistem Informasi', 2025),
('IK2511005', 'Susan Ristina', 'Sistem Informasi', 2025),
('IK2511060', 'Reskia', 'Sistem Informasi', 2025),
('IK2511036', 'Elsa Datu Samba', 'Sistem Informasi', 2025),
('IK2511065', 'Rangga', 'Sistem Informasi', 2025);

-- ==========================
-- Data Dosen
-- ==========================
INSERT INTO dosen (nama_dosen, email) VALUES
('Dr. Ahmad Fauzi', 'ahmad@umb.ac.id'),
('Dr. Siti Aminah', 'siti@umb.ac.id'),
('Dr. Rahman', 'rahman@umb.ac.id');

-- ==========================
-- Data Mata Kuliah
-- ==========================
INSERT INTO mata_kuliah (kode_matkul, nama_matkul, sks, id_dosen) VALUES
('SI101', 'Sistem Database', 3, 1),
('PW102', 'Pemrograman Web', 3, 2),
('JK103', 'Jaringan Komputer', 2, 3);

-- ==========================
-- Data Kelas
-- ==========================
INSERT INTO kelas (nama_kelas, semester, id_matkul) VALUES
('SI-5A', 5, 1),
('SI-5B', 5, 2),
('SI-5C', 5, 3);

-- ==========================
-- Data Absensi
-- ==========================
INSERT INTO absensi (id_mahasiswa, id_kelas, tanggal, status) VALUES
(1, 1, '2026-07-10', 'Hadir'),
(2, 1, '2026-07-10', 'Izin'),
(3, 2, '2026-07-11', 'Hadir'),
(4, 2, '2026-07-11', 'Sakit'),
(5, 3, '2026-07-12', 'Alpa');