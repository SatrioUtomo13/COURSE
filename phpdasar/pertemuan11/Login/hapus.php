<?php
// mulai session
session_start();

// cek jika tidak ada session login maka kembalikan user ke halaman login
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$nip = $_GET["nip"];

if (hapus($nip) > 0) {
    echo "
            <script>
                alert ('data berhasil dihapus');
                document.location.href = 'user.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert ('data gagal dihapus');
                document.location.href = 'user.php';
            </script>
        ";
}
