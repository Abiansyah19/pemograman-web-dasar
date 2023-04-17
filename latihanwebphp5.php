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
        <input type="text" name="nilai1">
        <br>
        <input type="text" name="nilai2">
        <br>
        <input type="submit" name="kirim" value="kirirm">
    </form>
    <?php
    if(isset($_POST['kirim']))
    {
        $a = $_POST['nilai1'];
        $b = $_POST['nilai2'];
        echo $c = $a+$b;
    }
    ?>
</body>
</html>