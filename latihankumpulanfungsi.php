<?php
function tambah($x, $y)
{
    return $x + $y;
}

function kurang($x, $y)
{
    return $x - $y;
}

function kali($x, $y)
{
    return $x * $y;
}

function bagi($x, $y)
{
    return $x / $y;
}
function ganjil($x, $y)
{
    for($i=$x; $i<=$y; $i++){
        if(($i % 2)==1){
            echo $i." ";
        }
    }
}
function genap($x, $y)
{
    for($i=$x; $i<=$y; $i++){
        if(($i % 2)==0){
            echo $i." ";
        }
    }
}
?>