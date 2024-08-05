

<?php

include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$pekerjaan = $_POST['pekerjaan'];

$query =mysqli_query($koneksi, "UPDATE kontak_crud SET nama='$nama', email='$email', notelp='$notelp', pekerjaan='$pekerjaan' WHERE id='$id'");
    // melakukan query untuk mengupdate data pada tabel 'kontak' berdasarkan 'id' yang diterima dari formulir

    if ($query) {
        echo '<script>alert("Data Berhasil Diedit");location.href="crud.php";</script>';
    } else {
        echo '<script>alert("Data gagal Diedit");location.href="crud.php";</script>';
    }
    

    // jika query gagal, tampilkan pesan kesalahan dan arahkan pengguna kembali ke halaman 'crud.phpsawadsawasda'