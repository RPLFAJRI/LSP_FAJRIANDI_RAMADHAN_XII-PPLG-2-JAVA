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
            <h3 class="mb-2">Daftar Penjualan</h3>
            <a href="export-penjualan.php" class="btn btn-info">Export Data</a>

            <table class="table">
                <thead>
                    <tr>
                        <th class="a">ID Penjualan</th>
                        <th class="b">Tanggal</th>
                        <th class="c">ID Barang</th>
                        <th class="d">Jumlah</th>
                        <th class="d">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
$ambildataStock = mysqli_query($conn, "SELECT * FROM penjualan");

                $i=1;
                while($data = mysqli_fetch_array($ambildataStock)){
                    // $idPenjualan = $data['id_penjualan'];
                    $tanggal = $data['tanggal'];
                    $idBarang = $data['id_barang'];
                    $jumlah = $data['jumlah'];    
                    $Total = $data['total'];                  
                    

                ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $tanggal; ?></td>
                        <td><?= $idBarang; ?></td>
                        <td><?= $jumlah; ?></td>
                        <td><?= $Total; ?></td>
                    </tr>

        <?php }; ?>
        </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>