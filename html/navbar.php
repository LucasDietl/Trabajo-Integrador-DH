<?php require_once("soporte.php");?>
<nav class="navbar navbar-default navbar-fixed-top navbarcolor">
  <div class="">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed hamburgesa" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logoname visible-xs" href="home.php">THE<br>BLONDIE</a>
    </div>


    <div class="collapse navbar-collapse border" id="navbar1">
      <div class="text-center">
        <a class="hidden-xs" style=" color:grey;" href="home.php">#Neverpony</a>
    </div>
    <div class="container-fluid">
      <div class="row ">
          <div class="col-sm-4">
            <div class="text-center">
              <?php if(!$auth->estaLogueado()){
                echo '
              <div class="nav navbar-nav pull-left iconos">
                <a class="white sesion  padding_SignInAndUp" href="signup.php">CREAR CUENTA</a>'.' / '.'
                <a class="white sesion  padding_SignInAndUp" href="signin.php">INICIAR SESIÓN</a>
              </div>';
            } ?>
              <?php if($auth->estaLogueado()){
                echo '
              <form class="navbar-form navbar-left" method="post" action="home.php">
                   <div class="form-group">
                </div>
                <button type="submit" class="btn btnbuscar" name="button" value="out">Cerrar Sesión</button>
              </form>';
              } ?>
            </div>
          </div>
          <div class="col-sm-4 hidden-xs">
            <div class="">
              <form class="navbar-form" role="search" method="get" action="zapatos.php">
                <div class="inner-addon left-addon">
                    <button type="submit"class="btn search">
                    <span class="glyphicon glyphicon-search"></span></button>
                    <input class="barra_busqueda" type="text" placeholder="Buscar" class="form-control" />
                </div>
              </form>

            </div>
          </div>
          <div class="col-sm-4">
            <div class="carrito text-center">
              <span class="glyphicon glyphicon-shopping-cart white carrrito_padding"></span>
              <span class="white sesion ">Carrito</span>
              <span class="white ">Items(0)</span>
              <span class="white ">0$</span>

            </div>
          </div>
      </div>
    </div>
    <div class="row vertical align">

    <div class="col-md-2 col-sm-3">
      <a class="navbar-brand logoname hidden-xs" href="home.php">THE<br>BLONDIE</a>
    </div>
    <div class="col-md-8 col-sm-9 center-block">


      <ul class="nav navbar-nav inline">
        <li class="active inlineblock"> <span class="sr-only">(current)</span></li>
        <li class="inlineblock"><a href="home.php">Home</a></li>
        <li class="inlineblock"><a href="zapatos.php">Zapatos</a></li>
        <li class="inlineblock"><a href="faq.php">Preguntas Frecuentes</a></li>
      </ul>
    </div>
    <div class="col-md-2 hidden-xs hidden-sm text-center iconos">
       <a href="https://www.facebook.com/theblondieok/"><i class="fa fa-facebook-square"></i></a>
       <a href="https://www.instagram.com/theblondieok/?hl=es"><i class="fa fa-instagram"></i></a>
       <a href="https://twitter.com/theblondieok" class="twitter"><i class="fa fa-twitter"></i></a>
    </div>
    </div>
  </div>
</div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
