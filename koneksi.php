<?php
$dbserver = 'localhost';
$dbname = 'pweb';
$dbuser = 'root';
$dbpassword = '';
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try {
    $connection = new PDO($dsn, $dbuser, $dbpassword);
}catch (Exception $exception){
    die("Terjadi Error: ".$exception->getMessage());
}
