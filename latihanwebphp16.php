<?php
include 'latihanwebphp13.php';
if(isset($_POST['ubah']))
{
   $kodebr= $_POST['kodebr'] ;
   $namabr= $_POST['namabr'] ;
   $satuan= $_POST['satuan'] ;
   $hargabeli=$_POST['hargabeli'] ;
   $hargajual= $_POST['hargajual'] ;  
$sql = "update barang set namabr ='$namabr',satuan = '$satuan',
hargabeli= $hargabeli, hargajual = $hargajual where kodebr='$kodebr'";

mysqli_query($conn,$sql);
header("Location: latihanwebphp14.php");
} 
else
{
$kodebr=$_GET['kodebr'];
$sqlcari = "select * from  barang where kodebr ='".$kodebr."'";
$hasil =  mysqli_query($conn,$sqlcari);
$isi=mysqli_fetch_assoc($hasil);
$namabr= $isi["namabr"];       
$satuan= $isi["satuan"];        
$hargabeli= $isi["hargabeli"];        
$hargajual= $isi["hargajual"];
}
?>
<html>
    <body>
        <form action="" method="post">
            <input type="text" name="kodebr" placeholder="kode br" 
            value="<?php echo $kodebr; ?> " readonly>
            <br>
            <input type="text" name="namabr" placeholder="nama br" 
            value="<?php echo $namabr; ?> ">
            <br>
            <input type="text" name="satuan" placeholder="satuan" 
            value="<?php echo $satuan; ?> ">
            <br>
            <input type="text" name="hargabeli" placeholder="harga beli" 
            value="<?php  echo $hargabeli; ?> ">
            <br>
            <input type="text" name="hargajual" placeholder="harga jual" 
            value="<?php echo $hargajual; ?> ">
            <br>
            <input type="submit" name="ubah" value="Ubah">            
        </form>
    </body>
</html>