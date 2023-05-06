<?php
//mulai session
session_start();

//require functions
require 'functions.php';

// cek cookie
if (isset($_COOKIE["key"])) {
    $key = $_COOKIE["key"];
    $result = mysqli_query($conn, "SELECT nip FROM users");
    $row = mysqli_fetch_assoc($result);

    // cek value cookie
    if ($key === hash('sha256', $row["nip"])) {
        $_SESSION["login"] = true;
    }
}


// cek session login
if (isset($_SESSION["login"])) {
    header('Location:user.php');
    exit;
}


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

            // jika password benar buat session login
            $_SESSION["login"] = true;

            // cek tombol remember
            if (isset($_POST['remember'])) {
                //buat cookie
                setcookie('key', hash('sha256', $row["nip"]), time() + 60);
            }

            //jika password benar arahkan user ke halaman user.php
            header("Location:user.php");
            exit;
        };
    }

    // jika data tidak ada set variabel error
    $error = true;
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

    <?php
    global $error;
    if ($error === true) {
        echo "
            <p style = 'color:red; font-style:italic;'>Username / Password salah</p>
            ";
    }
    ?>

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
                    <label for="remember">Rembember me</label>
                </td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="remember" id="remember">
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