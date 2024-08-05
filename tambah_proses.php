<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$pekerjaan = $_POST['pekerjaan'];

$query = mysqli_query($koneksi, "INSERT INTO kontak_crud (nama,email,notelp,pekerjaan) VALUES ('$nama', '$email', '$notelp', '$pekerjaan ') ");

if ($query) {
    echo '<script>alert("Data Berhasil Ditambahkan");location.href="crud.php";</script>';
} else {
    echo '<script>alert("Data gagal Ditambahkan");location.href="crud.php";</script>';
}

