<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
        <!-- php melihat niali buaka id dan class seperti js -->
        <input type="text" name="nilaiakhir">
        <br>
        <input type="submit" name="kirim" value="kirim">
    </form>
    <?php
    if(isset($_POST['kirim']))
    {
        $a = $_POST['nilaiakhir'];
        for($x=0;$x<=$a;$x++)
        {
            echo "Nilai $x <br>";
        }
    }
    // {
    // $x=1;
    // while($x<=$_POST["nilaiakhir"])
    // {
    //     // variable bisa dimasukkan ke string
    //     echo 'nilai : $x <br>';
    //     echo 'nilai : '.$x.' <br>';
    //     $x++;
    //     // atau boomer syle
    //     // $x=$x+1
    // }
    // $y=1;
    // do{
    //     echo 'nilai : $y <br>';
    //     echo 'nilai : '.$y.' <br>';
    //     $y++;
    // }
    // while ($y<=$_POST['nilaiakhir']);

    // }
    ?>

</body>
</html>