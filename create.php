<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $tanggalupload = $_POST['tanggalupload'];
    $gambar = $_POST['gambar'];
    $isiberita = $_POST['isiberita'];
    $kategori = $_POST['kategori'];
    $wilayah = $_POST['wilayah'];
    $conn->query("INSERT INTO berita (judul, tanggaluploud, gambar, isiberita, kategori, wilayah) VALUES ('$judul', '$tanggalupload', '$gambar', '$isiberita','$kategori', '$wilayah')");
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah berita</title>
    <link rel="stylesheet" href="assets/adminlte/css/adminlte.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Tambah berita</h1>
    <form action="" method="post">
        
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Isi Judul ini" required>
        </div>

        <div class="form-group">
            <label>Tanggal uploud</label>
            <input type="date" name="tanggalupload" class="form-control" required>
        </div>

        <div class="form-group">
            <label>gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>

        <div class="form-group">
            <label>isi berita</label>
            <div class="form-floating">
                <textarea name="isiberita" class="form-control"  placeholder="Isi Berita menarikmu" style="height: 150px"></textarea>
            </div>

        </div>
        <div class="form-group">
            <label>kategori</label>
           <select name="kategori" class="form-control" required>
                    <option value="kuliner">Kuliner</option>
                    <option value="hiburan">Hiburan</option>
                    <option value="olahraga">Olahraga</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>wilayah</label>
            <select name="wilayah" class="form-control" required>
                    <option value="pekalongan">Pekalongan</option>
                    <option value="Kajen">Kajen</option>
                    <option value="tegal">Tegal</option>
                    <option value="batang">Batang</option>
                    <option value="pemalang">Pemalang</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<script src="assets/adminlte/js/adminlte.min.js"></script>
</body>
</html>