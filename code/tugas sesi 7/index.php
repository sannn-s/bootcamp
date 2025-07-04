<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Form Tambah Produk</h2>
    <form action="proses.php" method="POST">
        <label for="nama">Nama Produk:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="harga">Harga (Rp):</label><br>
        <input type="number" name="harga" id="harga" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi" required></textarea><br><br>

        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>
