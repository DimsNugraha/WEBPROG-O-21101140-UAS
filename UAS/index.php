<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
            min-height: 100vh;
        }
        .card {
            border-radius: 18px;
        }
        .table thead th {
            background:rgb(68, 74, 146) !important;
            color: #fff;
            letter-spacing: 1px;
        }
        .btn-primary {
            background: #6366f1;
            border: none;
        }
        .btn-primary:hover {
            background: #4f46e5;
        }
        .btn-warning, .btn-danger {
            border: none;
        }
        .table-striped>tbody>tr:nth-of-type(odd)>* {
            background-color: #f1f5f9;
        }
        .table-striped>tbody>tr:nth-of-type(even)>* {
            background-color: #e0e7ff;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary"><i class="bi bi-box-seam"></i> Data Inventaris Barang</h2>
        <a href="tambah.php" class="btn btn-primary shadow-sm"><i class="bi bi-plus-circle"></i> Tambah Barang</a>
    </div>
    <div class="card shadow-lg border-0">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle mb-0">
                <thead>
                    <tr>
                        <th style="width:5%;">No</th>
                        <th style="width:45%;">Nama Barang</th>
                        <th style="width:20%;">Jumlah</th>
                        <th style="width:30%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM barang");
                $no = 1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td class='fw-semibold'>{$no}</td>
                            <td>{$row['nama']}</td>
                            <td><span class='badge bg-primary fs-6'>{$row['jumlah']}</span></td>
                            <td>
                                <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm me-2'><i class='bi bi-pencil-square'></i> Edit</a>
                                <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin hapus?\")'><i class='bi bi-trash'></i> Hapus</a>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
