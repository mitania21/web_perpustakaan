        <?php include 'koneksi.php'; ?>
        <?php include 'header.php'; ?>

        <h3 class="mb-3">📘 Data Buku</h3>

        <div class="card mb-4">
            <div class="card-body">
                <form method="post" class="row g-3">
                    <div class="col-md-3">
                        <input type="text" name="kode" class="form-control" placeholder="Kode Buku" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="stok" class="form-control" placeholder="Stok" required>
                    </div>
                    <div class="col-md-1">
                        <button name="simpan" class="btn btn-primary w-100">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr class="table-dark">
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <?php
                if (isset($_POST['simpan'])) {
                    mysqli_query($conn, "INSERT INTO buku VALUES(
        '$_POST[kode]','$_POST[judul]','$_POST[pengarang]','$_POST[stok]'
    )");
                }

                $data = mysqli_query($conn, "SELECT * FROM buku");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?= $d['kode_buku'] ?></td>
                        <td><?= $d['judul'] ?></td>
                        <td><?= $d['pengarang'] ?></td>
                        <td><?= $d['stok'] ?></td>
                        <td>
                            <a href="hapus.php?buku=<?= $d['kode_buku'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>