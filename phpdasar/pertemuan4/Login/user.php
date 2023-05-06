<?php
//require file functions yang berisi koneksi database
require 'functions.php';

// buat variabel users yang diisi dengan function get data yang ada didalam file functions
$users = get_data("SELECT * FROM users");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <h1>Petugas Aktif</h1>

    <a href="tambah.php">Tambah Petugas</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Tim</th>
            <th>Aksi</th>
        </tr>

        <?php $number = 1; ?>
        <?php foreach ($users as $row) : ?>
            <tr>
                <td style="text-align: center;"><?= $number; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nip"]; ?></td>
                <td style="text-align: center;"><?= $row["tim"]; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="hapus.php?nip=<?= $row['nip']; ?>" onclick="confirm('apakah anda yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php $number++; ?>
        <?php endforeach; ?>
    </table>

    <a href="login.php">logout</a>
</body>

</html>