<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
footer{
    position: absolute;
    bottom:0px;
    height:70px;
    width:100%;
    color:white;
    background-color:black;
}
footer>p{
    text-align:center;
    position: relative;
    top:40%;
}
</style>
</head>
<body>
<?php
if ($_GET["dogru"] == null) {
 $dogru = 0;
$dogrusayi = $dogru;
}else {
    $dogru = $_GET["dogru"];
    if ($dogru>120) {
        echo "120'den fazla net yapamazsın!<br/>";
       }elseif ($dogru<0) {
       echo "0'dan az net yapamazsın <br/>";
       }
       else {
       $dogrusayi = $dogru;
       }

}

if ($_GET["yanlis"]== null) {
    $yanlis = 0;
    $yanlissayi = $yanlis;
   }else {
       $yanlis = $_GET["yanlis"];
       if ($yanlis>120) {
        echo "120'den fazla yanlış yapamazsın.<br/>";
       }elseif ($yanlis<0) {
       echo "0'dan az yanlış yapamazsın <br/>";
       }
       else {
    $yanlissayi = $yanlis;
       }
      
   }

if (empty($dogrusayi) && empty($yanlissayi)) {
    header("Refresh: 3; url=http://nethesaplamaicinkurdum.rf.gd/index.php");
    echo "3 saniye içerisinde yönlendirileceksiniz <br/>";
}else {
    if ($dogru + $yanlis > 120) {
        echo "doğru ve yanlışın toplamı 120'den fazla olamaz.<br/>";
        header("Refresh: 3; url=http://nethesaplamaicinkurdum.rf.gd/index.php");
        echo "3 saniye içerisinde yönlendirileceksiniz.<br/>";
    }else {
     echo "Netiniz: " . "<b>" . $dogru - ($yanlis / 4) . "</b>";
    }
}
    ?>
    <footer>
    <p><b>Created by Ali</b></p>
</footer>
</body>
</html>
