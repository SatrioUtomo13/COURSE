<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "management_quality");

/* 
    buat sebuah function yang digunakan untuk menampung array hasil dari fetch
*/
function get_data($data)
{
    global $conn;
    $result = mysqli_query($conn, $data);
    $box = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $box[] = $row;
    }
    return $box;
};
