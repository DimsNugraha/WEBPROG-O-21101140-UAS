<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Barang</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Barang" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $nama = $_POST['nama'];
                $jumlah = $_POST['jumlah'];
                mysqli_query($conn, "INSERT INTO barang (nama, jumlah) VALUES ('$nama', '$jumlah')");
                echo "<script>alert('Data disimpan'); window.location='index.php';</script>";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
