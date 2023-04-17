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
        <input type="submit" name="tambah" value="tambah">
        <input type="submit" name="kurang" value="kurang">
        <input type="submit" name="kali" value="kali">
        <input type="submit" name="bagi" value="bagi">
        <input type="submit" name="ganjil" value="ganjil">
        <input type="submit" name="genap" value="genap">
    </form>
    <?php
    include './latihankumpulanfungsi.php';
    if (isset($_POST['tambah'])) {
        $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
        $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

        echo tambah($nilai1, $nilai2);
    }
    if (isset($_POST['kurang'])) {
        $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
        $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

        echo kurang($nilai1, $nilai2);
    }
    if (isset($_POST['kali'])) {
        $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
        $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

        echo kali($nilai1, $nilai2);
    }
    if (isset($_POST['bagi'])) {
        $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
        $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

        echo bagi($nilai1, $nilai2);
    }
    if (isset($_POST['ganjil'])) {
        $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
        $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

        echo ganjil($nilai1, $nilai2);
    }
    if (isset($_POST['genap'])) {
        $nilai1 = (int) htmlspecialchars($_POST['nilai1']);
        $nilai2 = (int) htmlspecialchars($_POST['nilai2']);

        echo genap($nilai1, $nilai2);
    }
    ?>
</body>

</html>