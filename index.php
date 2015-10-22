<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Assets | Site</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <?php
        include 'app/nav.php';
      ?>

      <!-- TODO: Write dashboard junk, maybe graphs or something? -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 main">
            <?php
              if(isset($_GET["page"]) && ($_GET["page"] == "dashboard" || $_GET["page"] == "")){
                include "app/dashboard.php";
              } elseif (isset($_GET["page"]) && $_GET["page"] == "computer") {
                include "app/computer.php";
              } elseif (isset($_GET["page"]) && $_GET["page"] == "product") {
                include "app/product.php";
              } elseif (isset($_GET["page"]) && $_GET["page"] == "user") {
                include "app/user.php";
              } elseif (isset($_GET["page"]) && $_GET["page"] == "setting") {
                include "app/setting.php";
              } // END OF PAGE BLOCK
            ?>

          </div>
        </div>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
