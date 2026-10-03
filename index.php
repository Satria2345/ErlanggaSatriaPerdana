```php
<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Berita</title>
    <link rel="stylesheet" href="assets/adminlte/css/adminlte.min.css">
</head>

<body>

<div class="container mt-5">

    <h1>Suara Merdeka</h1>

    <a href="create.php" class="btn btn-primary mb-3">
        Tambah Berita
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tgl Upload</th>
                <th>Gambar</th>
                <th>Isi Berita</th>
                <th>Kategori</th>
                <th>Wilayah</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        <?php
        $result = $conn->query(
            "SELECT * FROM berita ORDER BY tanggaluploud DESC"
        );

        $number = 1;

        while ($row = $result->fetch_assoc()):
        ?>

            <tr>

                <td><?= $number++; ?></td>

                <td>
                    <?= htmlspecialchars($row['judul']); ?>
                </td>

                <td>
                    <?= htmlspecialchars($row['tanggaluploud']); ?>
                </td>

                <td>
                    <?php if (!empty($row['gambar'])): ?>
                        <img
                            src="image/<?= htmlspecialchars($row['gambar']); ?>"
                            width="200"
                            height="130"
                            style="object-fit: cover;"
                        >
                    <?php else: ?>
                        Tidak ada gambar
                    <?php endif; ?>
                </td>

                <td>
                    <?= htmlspecialchars($row['isiberita']); ?>
                </td>

                <td>
                    <?= htmlspecialchars($row['kategori']); ?>
                </td>

                <td>
                    <?= htmlspecialchars($row['wilayah']); ?>
                </td>

                <td>

                    <a
                        href="update.php?id=<?= $row['id']; ?>"
                        class="btn btn-warning mb-1"
                    >
                        Update
                    </a>

                    <a
                        href="delete.php?id=<?= $row['id']; ?>"
                        class="btn btn-danger"
                        onclick="return confirm('Yakin ingin menghapus berita ini?')"
                    >
                        Hapus
                    </a>

                </td>

            </tr>

        <?php endwhile; ?>

        </tbody>
    </table>

</div>

<script src="assets/adminlte/js/adminlte.min.js"></script>

</body>
</html>
```
