<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'eriktokosepatu';

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_wisata = $_POST['nama_wisata'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_update = date('Y-m-d H:i:s'); // Current timestamp

    // Proses upload file
    $foto = $_FILES['foto'];
    $foto_name = $foto['name'];
    $foto_tmp_name = $foto['tmp_name'];
    $foto_folder = 'uploads/' . $foto_name;

    // Pastikan folder upload ada
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    if (move_uploaded_file($foto_tmp_name, $foto_folder)) {
        // Simpan ke database
        $sql = "INSERT INTO produk (id, nama_wisata, deskripsi, foto, tanggal_update) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issss', $id, $nama_wisata, $deskripsi, $foto_name, $tanggal_update);

        if ($stmt->execute()) {
            echo "Data berhasil disimpan.";
            echo "<melihat href='list_produk_sepatu.php'>melihat data Sepatu.</a>";

        } else {
            echo "Terjadi kesalahan: " . $stmt->error;
        }
    } else {
        echo "Gagal mengupload file.";
    }
}
?>