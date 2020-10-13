<?php 

if (!session_id()) session_start();

require_once '../app/init.php';


//inisialisasi class App yang ada di core
$app = new App;