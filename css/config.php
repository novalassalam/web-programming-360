<?php
/* settingan db */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pw');
 
/* coba koneksi */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// cek koneksi
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>