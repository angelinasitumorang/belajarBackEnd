<?php
include("konek.php");
$id=$_POST['id_dosen'];
$name=$_POST['nama_dosen'];
$matkul=$_POST['matkul'];

$masukindata="insert into dosen values('$id','$name','$matkul')";
$qry_insert=mysqli_query($connect,$masukindata)or die(mysql_error());
if ($qry_insert) {
    echo "data berhasil tersimpan <br> ,a href='tampil.php'>Tampilan Dosen</a>";
}else{
    echo "data gagal di simpan";
}
?>