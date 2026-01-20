<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="text-center">
    <h1 class="mb-3">Sistem Informasi Perpustakaan</h1>
    <p class="text-muted">Aplikasi pengelolaan data buku, anggota, dan peminjaman</p>

    <div class="row mt-4">
        <div class="col-md-3">
            <a href="buku.php" class="btn btn-primary w-100">📘 Data Buku</a>
        </div>
        <div class="col-md-3">
            <a href="anggota.php" class="btn btn-success w-100">👥 Data Anggota</a>
        </div>
        <div class="col-md-3">
            <a href="transaksi.php" class="btn btn-warning w-100">🔄 Transaksi</a>
        </div>
        <div class="col-md-3">
            <a href="laporan.php" class="btn btn-info w-100">📊 Laporan</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>


<div
    class="container">
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>