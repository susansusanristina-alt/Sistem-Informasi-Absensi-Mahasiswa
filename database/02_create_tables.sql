USE db_sistem_absensi_mahasiswa;

-- ===========================
-- Tabel Mahasiswa
-- ===========================
CREATE TABLE mahasiswa (
    id_mahasiswa INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(100) NOT NULL,
    angkatan YEAR NOT NULL
);

-- ===========================
-- Tabel Dosen
-- ===========================
CREATE TABLE dosen (
    id_dosen INT AUTO_INCREMENT PRIMARY KEY,
    nama_dosen VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- ===========================
-- Tabel Mata Kuliah
-- ===========================
CREATE TABLE mata_kuliah (
    id_matkul INT AUTO_INCREMENT PRIMARY KEY,
    kode_matkul VARCHAR(10) NOT NULL UNIQUE,
    nama_matkul VARCHAR(100) NOT NULL,
    sks INT NOT NULL,
    id_dosen INT NOT NULL,
    CONSTRAINT fk_matkul_dosen
        FOREIGN KEY (id_dosen)
        REFERENCES dosen(id_dosen)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

-- ===========================
-- Tabel Kelas
-- ===========================
CREATE TABLE kelas (
    id_kelas INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(20) NOT NULL,
    semester INT NOT NULL,
    id_matkul INT NOT NULL,
    CONSTRAINT fk_kelas_matkul
        FOREIGN KEY (id_matkul)
        REFERENCES mata_kuliah(id_matkul)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

-- ===========================
-- Tabel Absensi
-- ===========================
CREATE TABLE absensi (
    id_absensi INT AUTO_INCREMENT PRIMARY KEY,
    id_mahasiswa INT NOT NULL,
    id_kelas INT NOT NULL,
    tanggal DATE NOT NULL,
    status ENUM('Hadir','Izin','Sakit','Alpa') NOT NULL,

    CONSTRAINT fk_absensi_mahasiswa
        FOREIGN KEY (id_mahasiswa)
        REFERENCES mahasiswa(id_mahasiswa)
        ON UPDATE CASCADE
        ON DELETE CASCADE,

    CONSTRAINT fk_absensi_kelas
        FOREIGN KEY (id_kelas)
        REFERENCES kelas(id_kelas)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);