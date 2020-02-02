<?php
  $id = $_GET["id"];
  $tabela = $_GET["tabela"];
  $con = mysqli_connect('localhost','root','','projekcik') or die (mysqli_error($con));
  mysqli_query($con,'SET NAMES \'utf8\'');
  $query = mysqli_query($con,"DELETE FROM $tabela WHERE id='$id'");
  if($query){
    echo 'Usunięto pomyślnie';
    echo '<script type="text/javascript">
          window.location = "eksport.php?tabela='.$tabela.'";
          </script>';
  }
  else{
    echo 'Error!';
  }
 ?>
