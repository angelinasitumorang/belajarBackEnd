<?php
$host="localhost";
$user="root";
$pw="";
$db="db_siap";
$koneksi=mysqli_connect($host,$user,$pw,$db);
if ($koneksi) {
    echo"koneksi terhubung";
}else {
    "tidak terhubung";
}
?>