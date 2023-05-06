<?php
if (isset($_POST["login"])) {
    if ($_POST["username"] == "satrio" && $_POST["password"] == "123") {
        header("Location: user.php");
        exit;
    } else {
        $error = true;
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

    <?php if (isset($error)) : ?>
        <p style="color:red; font-style:italic;">Username/passowrd salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="username">Username :</label>
                </td>
                <td>
                    <input type="text" name="username" id="username" autocomplete="disable">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>