<?php
require 'functions.php';

// ambil data berdasarkan nip yang dikirim
$nip = $_GET["nip"];

$users = get_data("SELECT * FROM users WHERE nip = '$nip'")["0"];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert ('data berhasil diubah');
                document.location.href = 'user.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert ('data gagal diubah');
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
    <title>Ubah Petugas</title>
</head>

<body>
    <h1>Ubah Petugas</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td>
                    <input type="text" name="nip" id="nip" required value="<?= $users["nip"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" required value="<?= $users["nama"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Tim</td>
                <td>:</td>
                <td>
                    <input type="text" name="tim" required value="<?= $users["tim"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="text" name="password" required value="<?= $users["password"]; ?>">
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Save</button>
    </form>


</body>

</html>