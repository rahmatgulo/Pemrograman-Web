<?php

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  3$username = $_POST["username"];
  $password = $_POST["password"]; 

$sql = "SELECT password FROM WHERE username = '$username'";
$result = $mysqli->query($sql);
$hashed_password_from_database = $result->fetch_ascor()["password"];  

if (password_verify($password, $hashed_password_from_database)) {

    session_start();
    $_SESSION["username"] = $username;

    header("Location: dashboard.php");
  } else {
    echo "Username atau password salah. Coba lagi.";
  }
}
?>