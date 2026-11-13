CREATE TABLE buku_tamu (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100),
  pesan TEXT
);
INSERT INTO buku_tamu (nama, email, pesan) VALUES ('Dummy User', 'dummy@email.com', 'Halo ini pesan test');