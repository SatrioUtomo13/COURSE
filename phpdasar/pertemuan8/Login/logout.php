<?php 

// mulai session
session_start();

// unset sessionnya
session_unset();

// hancurkan sessionnya
session_destroy();

// kembalikan ke halaman login
header("Location: login.php");
