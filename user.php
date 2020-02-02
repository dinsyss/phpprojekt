<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <?php
      $user=$_COOKIE['zalogowanyuser'];
      $con = mysqli_connect("localhost", "root", "", "projekcik");
      if($con === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      mysqli_query($con,'SET NAMES \'utf8\'');
      $query = mysqli_query($con,"select * FROM klient WHERE login='$user'");
      $i = 0;
      while ($row = mysqli_fetch_assoc($query)) {
          foreach($row as $key => $field) {
              if($i==1){
                $imie = $field;
              }
              if($i==2){
                $nazwisko = $field;
              }
              if($i==3){
                $login = $field;
              }
              if($i==4){
                $haslo = 0;
              }
              if($i==5){
                $email = $field;
              }
              if($i==6){
                $numer = $field;
              }
              $i++;
          }
      }
      //Budowa html
      echo '<div class="login-form">';
        echo '<form action="userupdate.php" method="get">';
        echo '<br>Login: <input type="text" name="login" readonly="readonly" class="form-control" value="' . $user;
        echo '"><br>Imie: <input type="text" name="imie" class="form-control" value="' . $imie;
        echo '"><br>Nazwisko: <input type="text" name="nazwisko" class="form-control" value="' . $nazwisko;
        echo '"><br>Haslo: <input type="password" name="password" required="required" class="form-control"';
        echo '"><br>E-Mail: <input type="text" class="form-control" name="email" required="required" value="' . $email;
        echo '"><br>Numer: <input type="text" class="form-control" name="numer" required="required" value="' . $numer . '">';
        echo '<br><input type="submit" value="Wyślij" class="btn btn-primary btn-lg btn-block">';
        echo '<a href="main.php" style="color: white;" class="btn btn-primary btn-lg btn-block">Powrót</a>';
        echo '</form>';
      echo '</div>';
     ?>
  </div>
  </body>
</html>
