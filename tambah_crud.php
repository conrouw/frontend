<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH</title>
</head>
<body>
    <h1>FROM TAMBAH</h1>

    <form action="tambah_proses.php" method="post">
        <label>Nama:</label><br>
        <input type=" text" name="nama" required placeholder="masukan nama"><br>
        <label>Email:</label><br>
        <input type=" email" name="email" required placeholder="masukan email"><br>
        <label>No_telp:</label><br>
        <input type=" number" name="notelp" required placeholder="masukan no telp"><br>
        <label>Pekerjaan:</label><br>
        <input type=" text" name="pekerjaan" required placeholder="masukan pekerjaan"><br>

        <button type="submit">KIRIM</button>
    </form>
</body >
</html>