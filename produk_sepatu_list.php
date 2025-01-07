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

// Hapus data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Hapus file foto
    $query = "SELECT foto FROM produk WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data) {
        $foto_path = 'uploads/' . $data['foto'];
        if (file_exists($foto_path)) {
            unlink($foto_path);
        }

        // Hapus dari database
        $query = "DELETE FROM produk WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id);
        if ($stmt->execute()) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Terjadi kesalahan: " . $stmt->error;
        }
    }
}

// Ambil data produk
$query = "SELECT * FROM produk";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Produk Sepatu</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>List Data Produk Sepatu</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Wisata</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Tanggal Update</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama_wisata']; ?></td>
                        <td><?php echo $row['deskripsi']; ?></td>
                        <td><img src="uploads/<?php echo $row['foto']; ?>" alt="Foto" width="100"></td>
                        <td><?php echo $row['tanggal_update']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                            <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Tidak ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
