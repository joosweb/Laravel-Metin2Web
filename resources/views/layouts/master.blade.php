<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/boostrap.min.css"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="http://i.hizliresim.com/1YVgZj.png" style="margin-top:-20px;" alt="" width="190px;"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php?p=home">INICIO <span class="sr-only">(current)</span></a></li>
        <li><a href="/registro-de-usuarios">REGISTRO <span class="sr-only">(current)</span></a></li>
        <li><a href="#">RANKING <span class="sr-only">(current)</span></a></li>
        <li><a href="#">COMO JUGAR <span class="sr-only">(current)</span></a></li>
        <li><a href="#">REGLAS <span class="sr-only">(current)</span></a></li>
        <li><a href="#">FORO <span class="sr-only">(current)</span></a></li>
        <li><a href="#">CONTACTO <span class="sr-only">(current)</span></a></li>

       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ANIME <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
            </ul>
        </li> -->
      </ul>
    @if (Auth::guest())
    <form  class="navbar-form navbar-right" style="margin-top:7px;" name="iniciar_sesion" action="/inicio-de-session" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input name="login" id="blanco" placeholder="Usuario" class="form-control input-sm" type="text">
                    </div>
                    <div class="form-group">
                        <input name="password" id="blanco" placeholder="Contraseña" class="form-control input-sm" type="password">
                    </div>
                    <button  type="submit" class="btn btn-success btn-sm"><em class="icon-ok"></em> Entrar</button>
                <a class="btn btn-warning btn-sm" href="/registro-de-usuarios"><em class="icon-user"></em> Registrarse</a>
       </form> 
      @else
     {{ Auth::user()->login }}
      <a class="btn btn-warning btn-sm" style="float:right; margin-top:5px !important;" href="/cerrar-session"><em class="icon-user"></em> Cerrar Sessión</a>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- FIN NAV -->
<!-- CONTAINER -->
<div class="container-fluid">
<div class="well">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/banner1.jpg" class="zommimg" alt="..." width="100%">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/banner2.jpg" alt="..." width="100%">
      <div class="carousel-caption">
      </div>
    </div>
     <div class="item">
      <img src="img/banner2.jpg" alt="..." width="100%">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- CONTENIDO -->
<div class="row">
<div class="col-md-8">
@yield('content')
</div>
<div class="col-md-4">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Estados y Estadisticas</h3>
  </div>
  <div class="panel-body">
    <table class="table">
      <tr>
       <th>Auth</th>
       <th>Mysql</th>
       <th>Chan1</th>
       <th>Chan2</th>
       <th>Chan3</th>
       <th>Chan4</th>
      </tr>    
      <tr>
        <td><span class="btn btn-success btn-xs"> <i class="fa fa-arrow-up"></i></span></td>
        <td><span class="btn btn-success btn-xs"> <i class="fa fa-arrow-up"></i></span></td>
        <td><span class="btn btn-success btn-xs"> <i class="fa fa-arrow-up"></i></span></td>
        <td><span class="btn btn-success btn-xs"> <i class="fa fa-arrow-up"></i></span></td>
        <td><span class="btn btn-success btn-xs"> <i class="fa fa-arrow-up"></i></span></td>
        <td><span class="btn btn-success btn-xs"> <i class="fa fa-arrow-up"></i></span></td>
      </tr>  
    </table>
    <hr>
    <table class="table">
      <tr>
        <td width="10%">Jinno</td><td width="90%">
        <div class="progress progress-striped" style="margin-top:5px;">
          <div class="progress-bar progress-bar-default" style="width: 70%"></div>
        </div>
        </td>
      </tr>
      <tr>
        <td width="10%">Chunjo</td><td width="90%">
        <div class="progress progress-striped" style="margin-top:5px;">
          <div class="progress-bar progress-bar-success" style="width: 10%"></div>
        </div>
        </td>
      </tr>
      <tr>
        <td width="10%">Shinso</td><td width="90%">
        <div class="progress progress-striped" style="margin-top:5px;">
          <div class="progress-bar progress-bar-danger" style="width: 20%"></div>
        </div>
        </td>
      </tr>
    </table>
  </div>
</div>
</div> 
<div class="col-md-4" style="margin-top:-3%;"> 
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-play"> </span> RANKING</h3>
  </div>
  <div class="panel-body"> 
    <table class="table table-hover">
      <button class="btn btn-success" style="width:170px">Jugadores</button><button class="btn btn-warning" style="width:170px">Gremios</button>
      <table class="table">
        <tr>
          <th>#</th>
          <th>Personaje</th>
          <th>Nombre</th>
          <th>Reino</th>
          <th>Nivel</th>
        </tr>
        @if($data) 
        @foreach($data as $datos)
         <tr>
          <td>{{ $datos->id }}</td>
          <th><img src="img/raza/0.png" alt="" class="img-circle"> <span style="color:#3FB618;">Lv</span> {{ $datos->level }}</th>
          <td><a href="">{{ $datos->name }}</a></td>
          <td><img src="img/reino/1.png" width="40" alt=""></td>
          <td><a href="">{{ $datos->level }}</a></td>
          </tr>
          @endforeach
         @endif        
          </table>
        </table>
        {!! $data->links() !!}
    <hr>
    <center><a href="" class="btn btn-danger" style="width:100%;">Ver Ranking completo</a></center>
   </div>
  </div>
  <div class="panel panel-primary" style="margin-top:-3%;">
  <div class="panel-heading">
    <h3 class="panel-title">Trailer</h3>
  </div>
  <div class="panel-body">
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/tE2wdCXbPp0" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
</div>
  </div>
  </div>
  <footer class="footer-distributed" style="margin-top:-10px;">
      <div class="footer-left">
       <img src="http://i.hizliresim.com/1YVgZj.png" style="margin-top:-9px;" alt="" width="190px;">
        <p class="footer-links">
          <a href="index.php?p=home">Inicio</a>
          ·
          <a href="/registro-usuarios">Registro</a>
          ·
          <a href="#">Ranking</a>
          ·
          <a href="#">Como jugar</a>
          ·
          <a href="#">Reglas</a>
          ·
          <a href="#">Foro</a>
          ·
          <a href="#">Contacto</a>
        </p>
        <p class="footer-company-name">HanMetin2 © 2015 Todos los derechos reservados</p>
        <p class="footer-company-name">Sitio web diseñado y programado por <a href="mailto:jooswebs@gmail.com"> Koxe OS</a></p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>21 Revolution Street</span> Santiago, Chile</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+1 555 123456</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@metin2.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer>
</div>
<!-- FIN CONTENIDO -->
<!--- FIN CONTAINER -->
</body>
</html>