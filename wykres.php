<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <meta charset="utf-8">
    <title></title>
    <?php
      $con = mysqli_connect("localhost", "root", "", "projekcik");
      mysqli_query($con,'SET NAMES \'utf8\'');
      mysqli_query($con,'SET NAMES \'utf8\'');
    $querya = mysqli_query($con,'SELECT * FROM jdm');
    $queryb = mysqli_query($con,'SELECT * FROM sportowe');
    $queryc = mysqli_query($con,'SELECT * FROM limuzyna');
    $queryd = mysqli_query($con,'SELECT * FROM terenowe');
    if ($querya)
    {
        $rowa = mysqli_num_rows($querya);
        $rowb = mysqli_num_rows($queryb);
        $rowc = mysqli_num_rows($queryc);
        $rowd = mysqli_num_rows($queryd);
    }
     ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    var jdm = "<?php Print($rowa); ?>";
    var sportowe = "<?php Print($rowb); ?>";
    var limuzyna = "<?php Print($rowc); ?>";
    var terenowe = "<?php Print($rowd); ?>";
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Count', 'Amount'],
          ['JDM',     parseInt(jdm)],
          ['Sportowe',      parseInt(sportowe)],
          ['Limuzyna',  parseInt(limuzyna)],
          ['Terenowe', parseInt(terenowe)]
        ]);

        var options = {
          title: 'Ilość samochodów:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <style media="screen">
      #donutchart{
        height:600px;
        width:930px;
      }
      a.btn{
        background: #4a0202;
        border: 2px solid #000;
        border-radius: 300px;
      }
    </style>
  </head>
  <body>

<div class="container align-items-center align-self-center">

<div id="donutchart" class="align-items-center align-self-center">

</div>
<a href="main.php" style="color: white;" class="btn btn-primary btn-lg btn-block">Powrót</a>

</div>
  </body>
</html>
