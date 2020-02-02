<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
  </head>
  <body onload="onl();">
    <?php
      if(isSet($_POST["marka"])&&isSet($_POST["model"])&&isSet($_POST["kraj_prod"])&&isSet($_POST["rok_prod"])&&isSet($_POST["przebieg"])&&isSet($_POST["cena"])){
      $tabela = $_POST["tabela"];
      $marka = $_POST["marka"];
      $model = $_POST["model"];
      $kraj_prod = $_POST["kraj_prod"];
      $rok_prod = $_POST["rok_prod"];
      $przebieg = $_POST["przebieg"];
      $cena = $_POST["cena"];
      $link = mysqli_connect("localhost", "root", "", "projekcik");
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      mysqli_query($link,'SET NAMES \'utf8\'');
      $sql = "INSERT INTO $tabela VALUES ('','$marka','$model', '$kraj_prod', '$rok_prod', '$przebieg','$cena')";
      if(mysqli_query($link, $sql)){
          echo '<script>function onl(){document.getElementById("REEE").innerHTML = "Samochód '. $model .' dodany poprawnie!";} </script>';
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
      mysqli_close($link);
    }
    ?>
    <div class="login-form">
    <form action="add.php" method="post">
        <h2 class="text-center">Dodawanie nowego auta</h2>
        <h3 id="REEE" class="text-center"></h3>
        <div class="form-group">
          Kategoria:
          <select class="form-control show-tick sel" data-width="fit" name="tabela">
            <option value="jdm">JDM</option>
            <option value="sportowe">Sportowe</option>
            <option value="limuzyna">Limuzyna</option>
            <option value="terenowe">Terenowe</option>
          </select>
        </div>
            <div class="form-group">
          Marka:
            <input type="text" class="form-control" name="marka" required="required">
        </div>
        <div class="form-group">
          Model:
            <input type="text" class="form-control" name="model" required="required">
        </div>
        <div class="form-group">
          Kraj produkcji:
            <input type="text" class="form-control" name="kraj_prod" required="required">
        </div>
        <div class="form-group">
          Rok produkcji:
            <input type="number" min="1900" class="form-control" name="rok_prod" required="required">
        </div>
        <div class="form-group">
          Przebieg:
            <input type="number" min="0" class="form-control" name="przebieg" required="required">
        </div>
        <div class="form-group">
          John Cena:
            <input type="number" min="1" class="form-control" name="cena" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Dodaj</button>
            <a href="main.php" style="color: white;" class="btn btn-primary btn-lg btn-block">Powrót</a>
        </div>
        <p class="text-center"><a href="main.php">Powrót</a></p>
    </form>
  </div>
  </body>
</html>
