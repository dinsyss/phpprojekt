<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <?php
      setcookie('zalogowanyuser', 'clear', time() + (1), "/");
      echo '<script type="text/javascript">
        window.location = "index.php";
        </script>';
    ?>
  </body>
</html>
