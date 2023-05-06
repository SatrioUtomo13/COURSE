<?php
//require functions
require 'functions.php';

//cek apakah button sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //ambil nilai dari input tag username & password
    $nip = $_POST["nip"];
    $password = $_POST["password"];

    //ambil data dari database berdasarkan nip yang diinput
    $result = mysqli_query($conn, "SELECT * FROM users WHERE nip = '$nip'");
    $row = mysqli_fetch_assoc($result);

    //cek apakah ada data yang dikembalikan oleh variabel result
    if (mysqli_num_rows($result) === 1) {

        //cek password
        if (password_verify($password, $row["password"])) {
            //jika password benar arahkan user ke halaman user.php
            header("Location:user.php");
            exit;
        };
    } else {
        echo "
        <p style='color:red; font-style:italic;'>
            username atau password salah
        </p>
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
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nip">NIP</label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="nip" id="nip" autocomplete="disable">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>:</td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>