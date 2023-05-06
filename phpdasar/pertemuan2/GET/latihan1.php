<?php
$data = [
    [
        "petugas" => "satrio",
        "mesin" => "t1",
        "item" => "12001"
    ],
    [
        "petugas" => "utomo",
        "mesin" => "t2",
        "item" => "devon"
    ]
];
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
    <h1>DATA ITEMS</h1>

    <ul>
        <?php foreach ($data as $d) : ?>
            <li>
                <a href="latihan2.php?petugas=<?= $d["petugas"]; ?>&mesin=<?= $d["mesin"]; ?>&item=<?= $d["item"]; ?>"><?= $d["item"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>