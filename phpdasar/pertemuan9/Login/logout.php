<?php

// mulai session
session_start();

// unset sessionnya
session_unset();

// hancurkan sessionnya
session_destroy();

// unset cookie
setcookie('key', '', time() - 3600);

// kembalikan ke halaman login
header("Location: login.php");
