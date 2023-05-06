<?php
//cek session
if (!session_id()) session_start();

// call file init
require_once('../app/init.php');

$app = new App;
