<?php

include "koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontak</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>CRUD</h3>
        <button class="tambah">
            <a href="tambah_crud.php">TAMBAH DATA</a>
        </button>
    </header>   
    <div class="bg-atas"></div>
    <div class="table">
      
         <button>
            <table border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No_Telp</th>
                        <th>Pekerjaan</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1;
                    $query = $koneksi->query("SELECT * FROM kontak_crud"); //UNTUK MEMILIH SEMUA BARIS DARI TABEL KONTAK
                    while ($row = $query->fetch_assoc()) {
                        //melakukan perulangan untuk setuap baris hasil query
                    

                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['notelp']; ?></td>
                        <td><?php echo $row['pekerjaan']; ?></td>

                        <td style="text-align: center">
                            <a href="edit.php?id= <?= $row['id'] ?>">EDIT</a>
                        </td>
                        <td>
                        <a href="hapus.php?id= <?= $row['id'] ?>">HAPUS</a>
                        </td>
                        
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
         </button>
    
    </div>
    <div class="kembali">
        <button>
            <a href="index.html">Kembali</a>
        </button>
    </div>
</body>
</html>