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

    <title>ModeloNow</title>

    <?foreach($utils['css'] AS $lib => $route): ?>
    <link rel="stylesheet" class="<?=$lib?>" type="text/css" href="<?=$route?>">
  <?endforeach?>
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: rgb(255, 255, 255); padding-top: 5px; padding-bottom: 5px;">
      <a class="navbar-brand" href="#" style="padding: 0px;"><img src="<?=$utils['img']['logo']?>" class="img-responsive"></a>
      <ul class="nav navbar-nav pull-right">
        <li class="nav-item">
          <a class="nav-link" href="#funciona">¿Cómo funciona?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Premios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron no-padding bg-light-gray" style="padding: 0px" >
      <img src="<?=$utils['img']['header']?>" class="img-responsive">
      <div class="row text-center">
        <h3 class="color-blue como-funciona" id="funciona">¿Cómo funciona?</h3>
      </div>
      <br/>
      <div class="row" id="funciona">
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
      
    <div class="col-md-12 color-blue text-center" style="font-size: 1.6em; margin-top: 30px;">
        #YoTomoCervezaPorque
    </div>
    <div class="col-md-12 color-blue text-center" style="margin-top: 44px;">
        <img src="<?=$utils['img']['android']?>" style="width: 150px; height: 60px">
        <img src="<?=$utils['img']['ios']?>" style="width: 150px; height: 60px">
    </div>

</div> <!-- /container -->
<br/><br/>
 <footer>
 <img src="<?=$utils['img']['feed']?>" class="img-responsive">
  <img src="<?=$utils['img']['footer']?>" class="img-responsive">
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Beneficios</h4>
      </div>
      <div class="modal-body">
          <img src="<?=$utils['img']['puntos_canjeables']?>" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModalVip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Más Premiados</h4>
      </div>
      <div class="modal-body">
          <img src="<?=$utils['img']['mas_premiados']?>" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?foreach($utils['js'] AS $lib => $route): ?>
      <script src="<?=$route?>" class="<?=$lib?>"></script>
    <?endforeach?>
  </body>
</html>
