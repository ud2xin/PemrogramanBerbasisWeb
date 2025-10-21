<?php
   include 'koneksi_db.php'; // Pastikan $conn = new mysqli(...)


    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];


        // Siapkan query DELETE dengan prepared statement
        $stmt = $conn->prepare("DELETE FROM Pelanggan WHERE ID = ?");
        $stmt->bind_param("i", $id); // "i" menandakan tipe data integer

        // Eksekusi dan tangani hasilnya
        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil dihapus'); window.location='daftar_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data: " . addslashes($stmt->error) . "'); window.location='daftar_pelanggan.php';</script>";
        }


        // Tutup statement
        $stmt->close();
    } else {
        echo "<script>alert('ID tidak valid'); window.location='daftar_pelanggan.php';</script>";
    }


    // Tutup koneksi
    $conn->close();
?>