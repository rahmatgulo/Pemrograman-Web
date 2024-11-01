<?php
include "koneksi.php";
$query = "DELETE FROM barang WHERE id='$_GET[ID]'";
$mysqli->query($query);
header('location:index.php');