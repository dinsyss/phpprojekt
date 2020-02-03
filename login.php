<?php
if(isSet($_POST['username'])&&isSet($_POST['password'])){
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $con = mysqli_connect('localhost','root','','projekcik') or die (mysqli_error());
    $query = mysqli_query($con,"select * FROM klient WHERE login='$user' && haslo='$pass'");
    $row = mysqli_num_rows($query);
    $queryresult = mysqli_fetch_row($query);
    if($row == 1)
    {
      session_start();
      setcookie('zalogowanyuser', $user, time() + (3600), "/");
      $date = date('Y-m-d H:i:s');
      mysqli_query($con,"INSERT INTO log VALUES('','$user','$date','zalogowal sie')");
      if($queryresult[7]=="1"){
        setcookie('typkonta', "admin", time() + (3600), "/");
      }
      else{
        setcookie('typkonta', "plebejusz", time() + (3600), "/");
      }
      echo '<script type="text/javascript">
            window.location = "main.php";
            </script>';
    }
    else{
      echo '<script type="text/javascript">
            window.location = "login.html";
            </script>';
    }
    mysqli_close($con);
}
?>
