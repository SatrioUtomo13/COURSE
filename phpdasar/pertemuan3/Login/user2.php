<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "management_quality");

//minta data (query)
$result = mysqli_query($conn, "SELECT * FROM users");

/* 
-ambil data(fetch)
- ada beberapa cara dalam mengambil data :
    1. mysqli_fetch_row() : ini mengembalikan array numeric
    2. mysqli_fetch_assoc() : ini mengembalikan array assosiatif
    3. mysqli_fetch_array() : ini mengembalikan array numeric dan assosiatif
    4. mysqli_fetch_objek() : ini mengembalikan objek
*/

// while ($users = mysqli_fetch_assoc($result))
//     var_dump($users["password"]); 
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
    <h1>Tambah Petugas</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Tim</th>
            <th>Aksi</th>
        </tr>

        <?php $number = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td style="text-align: center;"><?= $number; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nip"]; ?></td>
                <td style="text-align: center;"><?= $row["tim"]; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $number++; ?>
        <?php endwhile; ?>
    </table>

    <a href="login.php">logout</a>
</body>

</html>