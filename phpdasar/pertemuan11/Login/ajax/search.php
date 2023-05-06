<?php
// require file functions
include('../functions.php');

// tangkap data yang dikirim 
$keyword = $_GET["keyword"];

$query = "SELECT * FROM users WHERE
                        nama LIKE '%$keyword%' OR
                        nip LIKE '%$keyword%'
                        ";

$users = get_data($query);

?>

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