<?php

$conn = mysqli_connect("localhost", "root", "","penjualanbarang");

if (!$conn ) {
    die ("Koneksi Database gagal" .mysqli_connect_error());
}else {
    // echo "Koneksi Database Berhasil";
}

?>