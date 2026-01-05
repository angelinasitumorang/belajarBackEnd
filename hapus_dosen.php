<?php

include("konek.php");
$id=$GET['id_dosen'];
$binsakan="delete from dosen where id_dosen='$id'";
$qry_hapus=mysqli_query($connect,$binsakan);
if ($qry_hapus) {
    echo "data berhasil di hapus";
}else{
    echo "data tidak jadi di hapus";
}

?>