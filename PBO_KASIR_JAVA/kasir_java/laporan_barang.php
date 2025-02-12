<?php
include 'koneksi/koneksi.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan Barang</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>




    <div class="container">
        <!-- Tabel Barang -->
        <div class="card">
            <h3 class="mb-2">Daftar Barang</h3>
            <a href="export-barang.php" class="btn btn-info">Export Data</a>

            <table class="table">
                <thead>
                    <tr>
                        <th class="a">ID Barang</th>
                        <th class="b">Nama Barang</th>
                        <th class="c">Harga</th>
                        <th class="d">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
$ambildataStock = mysqli_query($conn, "SELECT * FROM barang");

                $i=1;
                while($data = mysqli_fetch_array($ambildataStock)){
                    $namaBarang = $data['nama_barang'];
                    $harga = $data['harga'];
                    $stok = $data['stok'];
                    $idb = $data['id_barang'];                    
                    

                ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $namaBarang; ?></td>
                        <td><?= $harga; ?></td>
                        <td><?= $stok; ?></td>
                    </tr>

        <?php }; ?>
        </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>