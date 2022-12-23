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
   <!--  <form action="sonuc.php" method="get">
        <input type="number" name="dogru" id="dogru">
        <input type="number" name="yanlis" id="yanlis">
        <input type="submit" value="hesapla">
    </form>-->
    


    <div class="container">
    <form style="position:relative; margin-top:5%" action="sonuc.php" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Toplam Doğru Sayısı</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="dogru" aria-describedby="emailHelp" placeholder="Doğru Sayısı...">
    <small id="emailHelp" class="form-text text-muted">0'dan az 120'den fazla değer veremezsin.</small>
  </div><br/>
  <div class="form-group">
    <label for="exampleInputPassword1">Toplam Yanlış Sayısı</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="yanlis" placeholder="Yanlış Sayısı...">
    <small id="emailHelp" class="form-text text-muted">0'dan az 120'den fazla değer veremezsin.</small>
</div>
  <button type="submit" class="btn btn-danger">Hesapla</button>
</form>
</div>

<footer>
    <p><b>Created by Ali</b></p>
</footer>
    </body>
</html>
