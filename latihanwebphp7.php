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
        <input type="text" name="hari">
        <br>
        <input type="text" name="nilai2">
        <br>
        <input type="submit" name="kirim" value="kirirm">
    </form>
    <?php
    if(isset($_POST['kirim']))
    {
        switch($_POST['hari']){
            case "1" : echo "senin";
            break;
            case "2" : echo "senin1";
            break; 
            case "3" : echo "senin2";
            break;
            case "4" : echo "senin3";
            break;
            case "5" : echo "senin4";
            break;
            default: echo "bingung";
            
        }
    }
    ?>
</body>
</html>