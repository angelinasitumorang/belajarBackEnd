
<center><a href="form_dosen.html">+</a></center>
<?php

include("konek.php");
echo "<table border='1' align='center'>";
echo "<tr>";
    echo "<td>Id Dosen</td>";
    echo "<td>Nama Dosen</td>";
    echo "<td>Matkul</td>";
    echo "<td>Action</td>";
echo "</tr>";
$query="select*from dosen";
$sql=mysqli_query($koneksi,$query);
while ($hasil=mysqli_fetch_array($sql)) 
{
    echo"<tr>";
    echo"<td>".$hasil[0]."</td>";
    echo"<td>".$hasil[1]."</td>";
    echo"<td>".$hasil[2]."</td>";
    echo"<td>
    <a href='from_dosen.php?kode=$hasil[0]'>Edit</a>
    <a href='hapus_dosen.php?kode=$hasil[0]'>Hapus</a>
    </td>";
echo "</tr>";
}

echo "</table>"
?>