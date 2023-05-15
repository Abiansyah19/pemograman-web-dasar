<!-- mysql li procedural (bukan oriented) -->
<?php
// jika berbeda port selan 3306 maka ganti servername localhost:3307 (3307 port server)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toko";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect());
}else{
    echo("sukses bro");
}
?>