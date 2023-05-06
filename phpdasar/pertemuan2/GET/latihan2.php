<?php
if (
    !isset($_GET["petugas"]) ||
    !isset($_GET["mesin"]) ||
    !isset($_GET["item"])
) {
    // redirect 
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superglobal GET</title>
</head>

<body>
    <h1>DATA TREATING</h1>

    <ul>
        <li><?= $_GET["petugas"]; ?></li>
        <li><?= $_GET["mesin"]; ?></li>
        <li><?= $_GET["item"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali</a>
</body>

</html>