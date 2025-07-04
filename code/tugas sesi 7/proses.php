<?php
// Deklarasi Variabel
$nama = $_POST['nama'] ?? '';
$harga = $_POST['harga'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';

// Validasi: Pastikan semua field diisi
if (empty($nama) || empty($harga) || empty($deskripsi)) {
    echo "Semua field wajib diisi. <a href='index.php'>Kembali</a>";
    exit;
}

// Operator (contoh)
$total = $harga * 1; 

// If-Else (contoh logika lanjutan)
if ($harga < 1000) {
    echo "Harga terlalu murah untuk produk \"$nama\".<br>";
} else {
    echo "Produk \"$nama\" berhasil ditambahkan!<br>";
    echo "Harga: Rp " . number_format($harga, 0, ',', '.') . "<br>";
    echo "Deskripsi: " . htmlspecialchars($deskripsi) . "<br>";
}

?>
