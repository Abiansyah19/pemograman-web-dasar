<?php
include 'latihanwebphp13.php';

$sql='select * from barang';
$hasil = mysqli_query($conn,$sql);

// cek akses table
print_r($hasil);
echo '<br>';
echo '<a href="latihanwebphp15.php"><button>Tambah</button>';
echo '<table border = "1">';
echo '<tr><th>kode</th><th>nama</th><th>satuan</th><th>H beli</th>
<th>H jual</th><th>action</th></tr>';
if(mysqli_num_rows($hasil)>0)
{
    while($isi = mysqli_fetch_assoc($hasil))
    {
        echo '<tr><td>';
        echo $isi["kodebr"];
        echo '</td>';
        echo '<td>';
        echo $isi["namabr"];
        echo '</td>';
        echo '<td>';
        echo $isi["satuan"];
        echo '</td>';
        echo '<td>';
        echo $isi["hargabeli"];
        echo '</td>';
        echo '<td>';
        echo $isi["hargajual"];
        echo '</td>';
        echo '<td>';
        echo '<a href="latihanwebphp16.php?kodebr='.$isi["kodebr"].'"><button>u</button>';
        echo '<a href="latihanwebphp17.php?kodebr='.$isi["kodebr"].'"><button>-</button>';
        echo '</td></tr>';
    }
}
echo '</table>';
