<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<h3 class="mb-3">🔄 Transaksi Peminjaman</h3>

<!-- FORM -->
<div class="card mb-4">
    <div class="card-body">
        <form method="post" class="row g-3">
            <div class="col-md-3">
                <input type="text" name="anggota" class="form-control" placeholder="Kode Anggota" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="buku" class="form-control" placeholder="Kode Buku" required>
            </div>
            <div class="col-md-2">
                <input type="date" name="pinjam" class="form-control" required>
            </div>
            <div class="col-md-2">
                <input type="date" name="kembali" class="form-control" required>
            </div>
            <div class="col-md-2">
                <button name="simpan" class="btn btn-warning w-100">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php
// SIMPAN TRANSAKSI
if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO transaksi VALUES (
        '',
        '$_POST[anggota]',
        '$_POST[buku]',
        '$_POST[pinjam]',
        '$_POST[kembali]'
    )");
}
?>

<!-- TABLE -->
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tr class="table-dark">
            <th>Anggota</th>
            <th>Buku</th>
            <th>Pinjam</th>
            <th>Kembali</th>
            <th>Aksi</th>
        </tr>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM transaksi");
        while ($t = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?= $t['kode_anggota']; ?></td>
                <td><?= $t['kode_buku']; ?></td>
                <td><?= $t['tgl_pinjam']; ?></td>
                <td><?= $t['tgl_kembali']; ?></td>
                <td>
                    <?php
                    echo '<a href="hapus.php?transaksi=' . $t['id'] . '" 
              class="btn btn-danger btn-sm"
              onclick="return confirm(\'Yakin ingin menghapus data ini?\')">
              Hapus
              </a>';
                    ?>
                </td>
            </tr>
        <?php }
        ?>

    </table>
</div>

<?php include 'footer.php'; ?>