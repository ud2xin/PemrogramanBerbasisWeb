<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulasi Pembelian Barang</title>
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Verdana', sans-serif;
        }

        .wrapper {
            max-width: 520px;
            margin: 60px auto;
            padding: 25px;
            background-color: #ffffff;
            border: 2px solid #333;
            border-radius: 10px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        label, select, input {
            display: block;
            width: 100%;
            margin-top: 10px;
            font-size: 1em;
        }

        input, select {
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px;
            width: 100%;
            background-color: #28a745;
            color: #fff;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .output {
            margin-top: 20px;
            padding: 10px;
            background: #f1f1f1;
            border-radius: 5px;
        }

        .output p {
            margin: 8px 0;
        }

        .output strong {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h3>Formulir Pembelian Barang</h3>
        <form method="post">
            <label for="produk">Produk yang Dipilih:</label>
            <select name="produk" id="produk" required>
                <option value="Keyboard">Keyboard</option>
                <option value="Mouse">Mouse</option>
                <option value="Monitor">Monitor</option>
            </select>

            <label for="jumlah">Jumlah Unit:</label>
            <input type="number" name="jumlah" id="jumlah" min="1" required>

            <button type="submit">Proses Pembayaran</button>
        </form>

        <?php
        // List produk dan harga satuan
        $hargaBarang = array(
            "Keyboard" => 150000,
            "Mouse" => 100000,
            "Monitor" => 1000000
        );

        const TARIF_PAJAK = 0.10;

        // Fungsi format ke Rupiah
        function formatRupiah($angka) {
            return 'Rp ' . number_format($angka, 0, ',', '.');
        }

        // Logika saat form dikirim
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $produk = $_POST["produk"];
            $jumlah = (int)$_POST["jumlah"];
            $harga = $hargaBarang[$produk];
            $subtotal = $harga * $jumlah;
            $nilaiPajak = $subtotal * TARIF_PAJAK;
            $total = $subtotal + $nilaiPajak;

            echo "<div class='output'>";
            echo "<p>Barang: <strong>$produk</strong></p>";
            echo "<p>Harga Satuan: " . formatRupiah($harga) . "</p>";
            echo "<p>Jumlah Beli: $jumlah</p>";
            echo "<p>Subtotal: " . formatRupiah($subtotal) . "</p>";
            echo "<p>Pajak (10%): " . formatRupiah($nilaiPajak) . "</p>";
            echo "<p><strong>Total yang Harus Dibayar: " . formatRupiah($total) . "</strong></p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
