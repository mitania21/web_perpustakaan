<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            padding-top: 70px;
            /* biar konten tidak ketutup navbar */
        }

        .navbar {
            box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
        }

        .nav-link {
            transition: .2s;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        .nav-link.active {
            color: #ffc107 !important;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold" href="index.php">
                📚 Perpustakaan
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a class="nav-link <?= $halaman == 'index.php' ? 'active' : '' ?>" href="index.php">
                            <i class="bi bi-house-door"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $halaman == 'buku.php' ? 'active' : '' ?>" href="buku.php">
                            <i class="bi bi-book"></i> Buku
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $halaman == 'anggota.php' ? 'active' : '' ?>" href="anggota.php">
                            <i class="bi bi-people"></i> Anggota
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $halaman == 'transaksi.php' ? 'active' : '' ?>" href="transaksi.php">
                            <i class="bi bi-arrow-left-right"></i> Transaksi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $halaman == 'laporan.php' ? 'active' : '' ?>" href="laporan.php">
                            <i class="bi bi-file-earmark-text"></i> Laporan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>