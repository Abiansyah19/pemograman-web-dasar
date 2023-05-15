<?php
include 'latihanwebphp13.php';
if(isset($_POST['simpan']))
{
   $kodebr= $_POST['kodebr'] ;
   $namabr= $_POST['namabr'] ;
   $satuan= $_POST['satuan'] ;
   $hargabeli=$_POST['hargabeli'] ;
   $hargajual= $_POST['hargajual'] ;  
$sql = "insert into barang values('$kodebr','$namabr','$satuan',$hargabeli,$hargajual)";
mysqli_query($conn,$sql);
header("Location: latihanwebphp14.php");
}
?>
<html>
    <body>
        <form action="" method="post">
            <input type="text" name="kodebr" placeholder="kode br">
            <br>
            <input type="text" name="namabr" placeholder="nama br">
            <br>
            <input type="text" name="satuan" placeholder="satuan">
            <br>
            <input type="number" name="hargabeli" placeholder="harga beli">
            <br>
            <input type="number" name="hargajual" placeholder="harga jual">
            <br>
            <input type="submit" name="simpan" value="simpan">            
        </form>
    </body>
</html>