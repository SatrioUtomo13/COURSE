<?php
/* ========== KONEKSI & READ DATA =============*/
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "management_quality");

//buat sebuah function yang digunakan untuk menampung array hasil dari fetch
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


/* =========== CREATE DATA ============= */

//buat function yang digunakan untuk menambahkan data
function tambah($data)
{
    global $conn;
    //ambil data 
    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $tim = htmlspecialchars($data["tim"]);
    $password = htmlspecialchars($data["password"]);

    mysqli_query($conn, "INSERT INTO users VALUES ('$nip', '$nama', '$tim', '$password')");

    // buat function ini mengembalikan nilai antara -1 dan 1
    return mysqli_affected_rows($conn);
}


/* ============= HAPUS DATA ============= */

//buat function yang digunakan untuk menghapus data
function hapus($e)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE nip = '$e' ");
    return mysqli_affected_rows($conn);
}
