<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona główna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <style media="screen">
    .form-groupa{
        width: 24.5%;
        display: inline-grid;
        padding: 0px;
        margin: 0px;
    }
    #main{
      margin-top: 5%;
      background: black;
      padding: 50px;
    }
    #main .btn{
      background: #4a0202;
      border: 2px solid #000;
      border-radius: 300px;
    }
    </style>
  </head>
<body>
        <form>
          <div id="main">
          <h1 class="text-center">Salon Samochodowy</h1><br>
          <div class="form-groupa">
              <button onclick='window.location.href="eksport.php?tabela=JDM"' type="button" class="btn btn-primary btn-lg btn-block">JDM</button>
          </div>
          <div class="form-groupa">
              <button onclick='window.location.href="eksport.php?tabela=sportowe"' type="button" class="btn btn-primary btn-lg btn-block">Sportowe</button>
          </div>
          <div class="form-groupa">
              <button onclick='window.location.href="eksport.php?tabela=limuzyna"' type="button" class="btn btn-primary btn-lg btn-block">Limuzyny</button>
          </div>
          <div class="form-groupa">
              <button onclick='window.location.href="eksport.php?tabela=terenowe"' type="button" class="btn btn-primary btn-lg btn-block">Terenowe</button><br><br><br>
          </div>
          <div class="form-group">
              <button onclick='window.location.href="user.php"' type="button" class="btn btn-primary btn-lg btn-block">Konto</button>
          </div>
          <div class="form-group">
              <button onclick='window.location.href="add.php"' type="button" id="asdf" class="btn btn-primary btn-lg btn-block" hidden="hidden">Dodaj nowy samochód</button>
          </div>
          <div class="form-group">
              <button onclick='window.location.href="wykres.php"' type="button" class="btn btn-primary btn-lg btn-block">Statystyki</button>
          </div>
          <div class="form-group">
              <button onclick='window.location.href="logout.php"' type="button" class="btn btn-primary btn-lg btn-block">Wyloguj</button>
          </div>
       </form>
</div>
</body>
</html>
<?php
  $c=$_COOKIE['zalogowanyuser'];
  if($c=="premium"||$c=="admin"){
    echo '<script>document.getElementById("asdf").removeAttribute("hidden");</script>';
  }
?>
