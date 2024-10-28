<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "website-pmr";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}