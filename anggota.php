<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<h3 class="mb-3">👥 Data Anggota</h3>

<!-- FORM -->
<div class="card mb-4">
    <div class="card-body">
        <form method="post" class="row g-3">
            <div class="col-md-3">
                <input type="text" name="kode" class="form-control" placeholder="Kode Anggota" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="nama" class="form-control" placeholder="Nama Anggota" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
            </div>
            <div class="col-md-1">
                <button name="simpan" class="btn btn-success w-100">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php
// SIMPAN DATA
if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO anggota VALUES (
        '$_POST[kode]',
        '$_POST[nama]',
        '$_POST[alamat]'
    )");
}
?>

<!-- TABLE -->
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tr class="table-dark">
            <th>Kode</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM anggota");
        while ($a = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?= $a['kode_anggota']; ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['alamat']; ?></td>
                <td>
                    <a href="hapus.php?anggota=<?= $a['kode_anggota']; ?>" class="btn btn-danger btn-sm">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php include 'footer.php'; ?>