<nav class="navbar navbar-default navbar-fixed-top navbarcolor">
  <div class="">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logoname" href="home.php">THE<br>BLONDIE</a>
    </div>


    <div class="collapse navbar-collapse border" id="navbar1">
      <ul class="nav navbar-nav">
        <li class="active"> <span class="sr-only">(current)</span></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="zapatos.php">Zapatos</a></li>
        <li><a href="faq.php">Preguntas Frecuentes</a></li>
      </ul>
      <?php if(!estaLogueado()){
        echo '
      <div class="nav navbar-nav pull-right white">
        <li><a class="white" href="signup.php">Sign Up</a></li>
        <li><a class="white" href="signin.php">Sign In</a></li>
      </div>';
    } ?>
      <?php if(estaLogueado()){
        echo '
      <form class="navbar-form navbar-right" method="post" action="home.php">
           <div class="form-group">
        </div>
        <button type="submit" class="btn btnbuscar" name="button" value="out">Cerrar Sesión</button>
      </form>';
      } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
