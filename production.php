<!DOCTYPE html>
<html>

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6N8NHFHT94"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6N8NHFHT94');
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Продукты TerraClean</title>

  <meta name="discription" content="Очистители для двигателя TerraClean. Очистка двигателя, декарбонизация двигателя, обслуживание авто, чистка двигателя без разборки. Очистители TerraClean для СТО.">
  <?php
  require "block/header.php";
  ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link href="index.css" rel="stylesheet" type="text/css" />
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">


</head>

<body>

  <!-- Карусель -->
  <?php
  require "block/carusel.php";
  ?>


  <?php
  require "block/navbar.php";
  ?>
  <!--navbar-->

  <br><br>
  <div class="ouar-production">
    <h2>Pасширьте ассортимент услуг Вашего сервиса с TerraClean</h2><br>
    <hr>


    <div class="row">
      <div class="col-lg-5"><img src="img/decarbonizing-machine.png" width="200px"><br><br>
        <h3>Сервис для бензиновых машин</h3>
        <p>Оборудование и очистители для сервисного обслуживания бензиновых двигателей</p>
        <p><a class="btn btn-success" href="gasoline.php" role="button">Подробнее »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-5"><img src="img/decarbonizing-machine.png" width="200px"><br><br>
        <h3>Сервис для дизельных машин</h3>
        <p>Оборудование и очистители для сервисного обслуживания дизельных двигателей.</p>
        <p><a class="btn btn-success" href="disel.php" role="button">Подробнее »</a></p>
      </div><!-- /.col-lg-4 -->

    </div>



  </div>

  <br><br><br>

  <!-- Карусель -->
  <?php
  require "block/footer.php";
  ?>



  <script src="index.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>