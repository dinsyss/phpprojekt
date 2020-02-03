<?php
  if(isSet($_POST['username'])&&isSet($_POST['password'])){
      $user = $_POST['username'];
      $pass = md5($_POST['password']);
      $imie = $_POST['imie'];
      $nazwisko = $_POST['nazwisko'];
      $email = $_POST['email'];
      $tel = $_POST['tel'];
      $con = mysqli_connect('localhost','root','','projekcik') or die (mysqli_error());
      $query = mysqli_query($con,"select count(login) FROM klienci WHERE login='$user'");
      $row = mysqli_fetch_array($query);
      $exists = $row[0];
      if($exists > 0)
      {
          exit('Podany login juz istnieje!');
      }
      else{
         $sql = "INSERT INTO klient(imie,nazwisko,login,haslo,email,numer,typ) VALUES ('$imie','$nazwisko','$user','$pass','$email','$tel','0')";
        if (mysqli_query($con, $sql)) {
          $date = date('Y-m-d H:i:s');
          mysqli_query($con,"INSERT INTO log VALUES('','$user','$date','zarejestrowal sie')");
            echo '<script type="text/javascript">
                  window.location = "login.html";
                  </script>';
        } else {
          echo "Błąd: " . $sql . "<br>" . mysqli_error($con);
        }
      }
      mysqli_close($con);
  }
 ?>
