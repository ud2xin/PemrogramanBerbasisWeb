<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>
    <h2>Form Input Nilai Mahasiswa</h2>
    <form method="post" action="">
        <label>Nama Mahasiswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" required><br><br>

        <input type="submit" name="submit" value="Proses">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $predikat = "";

        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
        } elseif ($nilai >= 75 && $nilai <= 84) {
            $predikat = "B";
        } elseif ($nilai >= 65 && $nilai <= 74) {
            $predikat = "C";
        } elseif ($nilai >= 50 && $nilai <= 64) {
            $predikat = "D";
        } elseif ($nilai >= 0 && $nilai <= 49) {
            $predikat = "E";
        } else {
            $predikat = "Tidak valid";
        }

        echo "<hr>";
        echo "<h3>Hasil:</h3>";
        echo "Nama Mahasiswa: <strong>$nama</strong><br>";
        echo "Nilai Ujian: <strong>$nilai</strong><br>";
        echo "Predikat: <strong>$predikat</strong><br>";
    }
    ?>
</body>
</html>
