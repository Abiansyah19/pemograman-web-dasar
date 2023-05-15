<?php
include 'latihanwebphp13.php';

$sql = "select * from barang";
$hasil =  mysqli_query($conn,$sql);
//cek akses table
//print_r($hasil);
echo '<a href="latihanwebphp15.php"><button>+</button></a>';
echo '<table border="1">';
echo '<tr><th>Kode</th><th>Nama</th><th>Satuan</th>
<th>H Beli</th><th>H Jual </th><th>action</th></tr>';
if(mysqli_num_rows($hasil)>0)
{
    while($isi=mysqli_fetch_assoc($hasil))
    {
        echo '<tr><td>';
        echo $isi["kodebr"];
        echo '</td><td>';
        echo $isi["namabr"];
        echo '</td><td>';
        echo $isi["satuan"];
        echo '</td><td>';
        echo $isi["hargabeli"];
        echo '</td><td>';
        echo $isi["hargajual"];
        echo '</td><td>';
        echo '<a href="latihanwebphp16.php?kodebr='.$isi["kodebr"].'"><button>U</button></a>';
        echo '<a href="latihanwebphp17.php?kodebr='.$isi["kodebr"].'"><button>-</button></a>';
        echo '</td></tr>';     
    }
}
echo '</table>';
?>