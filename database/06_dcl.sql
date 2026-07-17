CREATE USER 'admin_absensi'
IDENTIFIED BY '12345';

GRANT ALL PRIVILEGES

ON db_sistem_absensi_mahasiswa.*

TO 'admin_absensi';

FLUSH PRIVILEGES;