<?php

$host = "localhost";
$port = "3306";
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
   $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
   echo "Koneksi berhasil" . PHP_EOL;

   //menutup koneksi
   $connection = null;
}catch (PDOException $exception){
   echo "Gagal Terkoneksi ke MYSQL : " . $exception->getMessage() . PHP_EOL;
}