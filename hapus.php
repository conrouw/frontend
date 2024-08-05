<?php
include 'koneksi.php';

// Periksa apakah 'id' dikirimkan melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perluas query dengan tanda kutip pada 'id'
    $query = mysqli_query($koneksi, "DELETE FROM kontak_crud WHERE id='$id'");

    if ($query) {
        echo '<script>alert("Data Berhasil Dihapus");location.href="crud.php";</script>';
    } else {
        echo '<script>alert("Data gagal Dihapus");location.href="crud.php";</script>';
    }
    } else {
        echo "Parameter 'id' tidak ditemukan dalam URL.";
    }
