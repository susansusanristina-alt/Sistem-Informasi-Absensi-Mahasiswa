USE db_sistem_absensi_mahasiswa;

CREATE VIEW v_absensi AS

SELECT

m.nim,
m.nama,
a.tanggal,
a.status

FROM mahasiswa m

JOIN absensi a

ON m.id_mahasiswa=a.id_mahasiswa;

CREATE INDEX idx_nim

ON mahasiswa(nim);