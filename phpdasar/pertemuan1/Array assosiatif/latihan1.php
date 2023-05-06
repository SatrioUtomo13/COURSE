<!-- 
section ini membahas bagaimana caranya membuat array assosiatif dan menampilkannya 
array assosiatif adalah sebuah array yang indexnya berupa string yang kita buat sendiri
-->

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
    <title>Array assosiatif</title>
</head>

<body>
    <h1>Data Treating</h1>

    <?php foreach ($data as $d) : ?>
        <ul>
            <li>Petugas : <?= $d["petugas"]; ?></li>
            <li>Mesin : <?= $d["mesin"]; ?></li>
            <li>Item : <?= $d["item"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>