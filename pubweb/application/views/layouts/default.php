<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <?foreach($utils['css'] AS $lib => $route): ?>
    <link rel="stylesheet" class="<?=$lib?>" type="text/css" href="<?=$route?>">
  <?endforeach?>
  </head>

  <body>

    <nav class="navbar navbar-static-top navbar-dark bg-inverse " style="padding-top:10px">
      <a class="navbar-brand" href="#" style="padding: 0px;"><img src="<?=$utils['img']['logo']?>" class="img-responsive"></a>
      <ul class="nav navbar-nav pull-right">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <span class="navBtn">Botón</span>
        </li>
      </ul>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron no-padding bg-light-gray" style="padding: 0px" >
      <img src="<?=$utils['img']['header']?>" class="img-responsive">
      <div class="row text-center">
        <h3 class="color-blue como-funciona">¿Cómo funciona?</h3>
      </div>
      <br/>
      <div class="row">
          <div class="col-md-2 col-md-offset-2 color-blue border-blue-right">
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta
          </div>
          <div class="col-md-4 color-blue ">
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta
          </div>
          <div class="col-md-2 color-blue border-blue-left">
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta
          </div>
      </div>
      <br/>
    </div>

    <div class="container">
      
      <?=$center?>
      
      <footer>
        <p>&copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?foreach($utils['js'] AS $lib => $route): ?>
      <script src="<?=$route?>" class="<?=$lib?>"></script>
    <?endforeach?>
  </body>
</html>
