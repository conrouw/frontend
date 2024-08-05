<?php

include ("koneksi.php");

// periksa apakah 'id' dikirimkan melalui url

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// melakukan query untuk mengambil data kontak berdasarkan 'id'

$query = mysqli_query($koneksi, "SELECT * FROM kontak_crud WHERE id = '$id'");

// periksa apakah data ditemukan?

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
} else {
    // handle jika 'id' tidak ditemukan, misalnya redirect atau pesan kesalahan
    echo "DATA TIDAK DITEMUKAN!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<form action="edit_proses.php" method="post">
        <input type="hidden" name='id' value="<?php echo $data['id']; ?>">
        <label>Nama:</label><br>
        <input type=" text" name="nama" value="<?php echo $data['nama']; ?>" required placeholder="masukan nama"><br>
        <label>Email:</label><br>
        <input type=" email" name="email" value="<?php echo $data['email']; ?>" required placeholder="masukan email"><br>
        <label>No_telp:</label><br>
        <input type=" text" name="notelp"  value="<?php echo $data['notelp']; ?>"required placeholder="masukan no telp"><br>
        <label>Pekerjaan:</label><br>
        <input type=" text" name="pekerjaan"  value="<?php echo $data['pekerjaan']; ?>"required placeholder="masukan pekerjaan"><br>

        <button type="submit">KIRIM</button>
    </form>
    
</body>
</html>
