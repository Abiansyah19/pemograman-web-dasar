<?php
include 'latihanwebphp13.php';
if(isset($_GET['kodebr']))
{
$kodebr=$_GET['kodebr'];
$sql = "delete from  barang where kodebr ='".$kodebr."'";
mysqli_query($conn,$sql);
header("Location: latihanwebphp14.php");
}