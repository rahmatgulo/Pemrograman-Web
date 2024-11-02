<?php
// try {
//     $pdo = new PDO("mysql:host=localhost;dbname=dbpenjualan","root","");
//     $PDO->set_Attribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
//     echo "Koneksi ke Database Berhasil";
//} catch (PDOException $e) {
//    echo "Koneksi gagal :".$e->getMessage();
//}

$mysqli = new mysqli("localhost","root","","penjualan");
if($mysqli->connect_error){
  die("Konversi gagal :".$mysqli->connect_error);
}