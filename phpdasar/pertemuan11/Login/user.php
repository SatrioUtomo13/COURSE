<?php
// mulai session
session_start();

// cek jika tidak ada session login maka kembalikan user ke halaman login
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


//require file functions yang berisi koneksi database
require 'functions.php';


// buat variabel users yang diisi dengan function get data yang ada didalam file functions
$users = get_data("SELECT * FROM users");

// cek apakah tombol cari sudah ditekan atau belum
if (isset($_POST["cari"])) {

    $users = cari($_POST["keyword"]);
}


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

    <!-- tambah petugas -->
    <a href="tambah.php">Tambah Petugas</a>
    <br><br>

    <!-- fitur cari -->
    <form action="" method="post">
        <input type="text" name="keyword" size="30" autocomplete="off" autofocus id="keyword">
        <button type="submit" name="cari" id="cari">Cari</button>
    </form>
    <br>
    <div id="container">
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
                        <a href="ubah.php?nip=<?= $row['nip'] ?>">Ubah</a> |
                        <a href="hapus.php?nip=<?= $row['nip']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php $number++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <a href="logout.php">logout</a>

    <script src="script.js"></script>
</body>

</html>