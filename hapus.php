<?php
include 'koneksi.php';

if (isset($_GET['buku'])) {
    mysqli_query($conn, "DELETE FROM buku WHERE kode_buku='$_GET[buku]'");
}
if (isset($_GET['anggota'])) {
    mysqli_query($conn, "DELETE FROM anggota WHERE kode_anggota='$_GET[anggota]'");
}

header("location:index.php");
