CREATE DATABASE perpustakaan;
USE perpustakaan;

CREATE TABLE buku (
    kode_buku VARCHAR(10) PRIMARY KEY,
    judul_buku VARCHAR(100),
    pengarang VARCHAR(100),
    stok INT
);

CREATE TABLE anggota (
    kode_anggota VARCHAR(10) PRIMARY KEY,
    nama VARCHAR(50),
    alamat VARCHAR(100)
);

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_anggota VARCHAR(10),
    kode_buku VARCHAR(10),
    tanggal_pinjam DATE,
    tanggal_kembali DATE
);
