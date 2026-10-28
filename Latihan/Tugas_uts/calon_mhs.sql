CREATE DATABASE IF NOT EXISTS db_pendaftaran;
USE db_pendaftaran;

CREATE TABLE IF NOT EXISTS calon_mhs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_pendaftaran VARCHAR(20) NOT NULL,
    nama_pendaftar VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    ttl VARCHAR(100) NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL,
    pekerjaan_ortu VARCHAR(100) NOT NULL,
    nilai_matematika FLOAT NOT NULL,
    nilai_b_inggris FLOAT NOT NULL,
    nilai_umum FLOAT NOT NULL,
    rata_rata FLOAT NOT NULL,
    keterangan VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);