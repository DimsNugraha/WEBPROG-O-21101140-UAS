<?php include "koneksi.php"; ?>
<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Barang</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($row['nama']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" value="<?= htmlspecialchars($row['jumlah']) ?>" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_POST['update'])) {
                $nama = $_POST['nama'];
                $jumlah = $_POST['jumlah'];
                mysqli_query($conn, "UPDATE barang SET nama='$nama', jumlah='$jumlah' WHERE id=$id");
                echo "<script>alert('Data diupdate'); window.location='index.php';</script>";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
