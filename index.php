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
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Assets</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Main</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Computers</a></li>
                  <li><a href="#">Products</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Users</a></li>
                  <li><a href="#">Settings</a></li>
                </ul>
              </li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- TODO: Write dashboard junk, maybe graphs or something? -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 main">

            <div class="panel panel-default">
              <div class="panel-body">
                <form id="frmSearch" method="get">
                  <input id="txtSearch" name="txtSearch" type="text" class="form-control" placeholder="Search">
                  <input type="submit" value="Submit">
                </form>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body">
                Area to put results.... Nothing for now
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
