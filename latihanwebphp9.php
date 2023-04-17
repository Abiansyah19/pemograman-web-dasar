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
        $x=array("php","css","js","html");
        echo $x[0];
        echo "<br>";
        echo $x[1];
        echo "<br>";
        print_r($x);
        foreach($x as $isi)
        {
            echo $isi;
            echo "<br>";
        }
    }
    ?>
</body>
</html>