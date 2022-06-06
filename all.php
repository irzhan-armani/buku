<?php
include 'koneksi.php';
/**
 * @var $connection PDO
 */
$statement = $connection->query("select * from buku");
//Atur supaya hasil query berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$result =$statement->fetchAll();
//Output JSON
header('Content-Type: application/json');
echo json_encode($result);