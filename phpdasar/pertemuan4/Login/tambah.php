<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert ('data berhasil ditambahkan');
                document.location.href = 'user.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert ('data gagal ditambahkan');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
</head>

<body>
    <h1>Tambah Petugas</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td>
                    <input type="text" name="nip" id="nip" required>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>Tim</td>
                <td>:</td>
                <td>
                    <input type="text" name="tim" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Save</button>
    </form>


</body>

</html>