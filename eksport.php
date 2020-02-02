<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eksport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <style media="screen">
      div{
        width: 98%;
        margin: 50px 20px 20px 20px;
      }
      .btn{
        background: #4a0202;
        border: 2px solid #000;
        border-radius: 300px;
      }
    </style>
  </head>
  <body>
    <?php
      $tabela = $_GET["tabela"];
      $i = 0;
      session_start();
      $polaczenie = mysqli_connect('localhost','root','','projekcik') or die (mysqli_error($polaczenie));
      mysqli_query($polaczenie,'SET NAMES \'utf8\'');
      $result = mysqli_query($polaczenie,"SELECT * FROM $tabela");
      echo "<div id='tabela'><h1 class='text-center'>Samochody " . ucfirst($tabela) . "</h1><table class='table table-striped table-dark table-bordered table-hover table-sm'>";
      echo '<thead><tr><th>Nr.</th><th>Marka</th><th>Model</th><th>Kraj</th><th>Rok</th><th>Przebieg (KM)</th><th>Cena (PLN)</th></tr></thead>';
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        foreach($row as $key => $field){
          if($i==0){
            $id = $field;
          }
          $i++;
          echo "<td>";
          echo $field;
          echo "</td>";
          if($i==7){
            $i=0;
          }
        }
        if($_COOKIE["typkonta"]=="admin"){
          echo "<td><a href=\"delete.php?id=" . $id . "&tabela=" . $tabela . " \">Usun rekord</a></td>";
        }
        echo "</tr>";
      }
       echo "</table><a href='main.php' style='color: white;' class='btn btn-primary btn-lg btn-block'>Powrót</a></div>";
    ?>
  </body>
</html>
