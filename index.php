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

            <div class="panel panel-default">
              <div class="panel-body">
                <form id="frmSearch" method="get">
                  <div class="row">
                    <div class="col-xs-10">
                      <input id="txtSearch" name="txtSearch" type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-xs-2">
                      <input class="form-control" type="submit" value="Submit">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body result-area">
                <div class="container">
                  <h2>Results:</h2>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                      </tr>
                      <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                      </tr>
                      <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
