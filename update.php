<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM berita WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $judul = $_POST['judul'];
    $tanggalupload = $_POST['tanggalupload'];
    $gambar = $_POST['gambar'];
    $isiberita = $_POST['isiberita'];
    $kategori = $_POST['kategori'];
    $wilayah = $_POST['wilayah'];

    $conn->query("UPDATE berita SET judul='$judul', tanggalupload='$tanggalupload', gambar='$gambar', isiberita='$isiberita', kategori='$kategori', wilayah='$wilayah'WHERE id=$id");
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="assets/adminlte/css/adminlte.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Barita </h1>
    <form action="" method="post">
       
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= $row['judul']; ?>" required>
        </div>

        <div class="form-group">
            <label>Tanggal uploud</label>
            <input type="text" value="<?= $row['tanggaluploud']; ?>" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="text" value="<?= $row['gambar']; ?>" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label>Isi berita</label>
            <input type="text" value="<?= $row['isiberita']; ?>" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" value="<?= $row['kategori']; ?>" class="form-control" disabled>
        </div>

        <div class="form-group">
            <label>Wiayah</label>
            <input type="text" value="<?= $row['wilayah']; ?>" class="form-control" disabled>
        </div>
       
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-danger">kembali</a>
    </form>
</div>
<script src="assets/adminlte/js/adminlte.min.js"></script>
</body>
</html>