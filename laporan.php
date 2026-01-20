<?php
include 'koneksi.php';
include 'header.php';
?>

<h3 class="mb-3">📊 Laporan Peminjaman</h3>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($conn, "
    SELECT 
        anggota.nama,
        buku.judul,
        transaksi.tgl_kembali
    FROM transaksi
    JOIN anggota 
        ON transaksi.kode_anggota = anggota.kode_anggota
    JOIN buku 
        ON transaksi.kode_buku = buku.kode_buku
");

            while ($data = mysqli_fetch_assoc($query)) {
                echo "<tr>
            <td>{$data['nama']}</td>
            <td>{$data['judul']}</td>
            <td>{$data['tgl_kembali']}</td>
          </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>