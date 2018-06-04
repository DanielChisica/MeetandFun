<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="author" content="Daniel Jiménez Chísica">
    <meta name="author" content="Andrey Niño">
    <meta name="author" content="Andres García">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <title>Configuraciones</title>
</head>
<body>
<section class="back-acount">
<nav class="navbar navbar-light">
  <a class="navbar-brand" href="#">
    <img src="Recursos/logo%20blanco.png" alt="" class="logo">
  </a>
<div class="d-flex justify-content-end" id="navbarSupportedContent">
    <div class="dropdown">
      <button  class="user btn dropdown-toggle d-flex" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="Recursos/user.png" alt="..." class="rounded-circle profile"><p class="p mr-2 ml-2">Nombre de Usuario</p></button>
          <div class="dropdown-menu dropdown-menu-right">
              <div class="container">
                  <div class="row ml-2">
                      <div class="col-2 d-flex justify-content-end icons">
                          <i class="fas fa-key login1"></i>
                      </div>
                    <div class="col-10">
                        <a href="" class="color">Cambio de Contraseña</a>
                    </div>
                    </div>
                  <div class="row top ml-2">
                     <div class="col-2 d-flex justify-content-end icons">
                         <i class="fas fa-user-circle login1"></i>
                     </div>
                     <div class="col-10">
                         <a href="" class="color">Perfil</a>
                     </div>

                  </div>
                  <div class="row">

                  </div>
              </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="formulario.php">No tiene cuenta? Registrese</a>
          <a class="dropdown-item" href="configuraciones.php">Olvido su Contraseña?</a>
        </div>
    </div>
</div>

</nav>
<div>

<div class="container d-flex juestify-content-center password">
	<div class="row">
		<div class="col-md-6 offset-md-3">

                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="">Cambiar Contraseña</h3>
                        </div>
                        <div class="card-body align-items-start">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputPasswordOld">Contraseña Actual</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                                    <span class="form-text small text-muted">
                                            La contraseña debe contener entre 8-20 caracteres, y <em>no</em> contener espacios.
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Repetir la contraseña</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                                    <span class="form-text small text-muted">
                                            Para confirmar, escriba de nuevo la contraseña.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-lg float-right">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
    </div>
    </div>
</section>
<div class="cta-sektion  border py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <h3><span class="glyphicon glyphicon-cog "></span> <b>Desocupado?</b> Explora nuestros planes.</h3>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 ">
                <div class="span12">
                    <form id="custom-search-form" class="form-search form-horizontal pull-right">
                        <div class="input-append span12">
                            <input type="text" class="search-query mac-style btn border border-light" placeholder="Buscar">
                            <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer  py-5  ">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3 footer-one">
		    <img   class="logo1" src="Recursos/logo2-01.png" alt="Logo">

		    <p class="pt-4">Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		    	<div class="social-icons">
               <a href="https://www.facebook.com/"><i class="fab fa-facebook fig mr-3"></i></a>
               <a href="https://twitter.com/"><i class="fab fa-google-plus-g fig mr-3"></i></a>
	            <a href="https://plus.google.com/"><i class="fab fa-twitter-square fig mr-3"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fig"></i></a>
	        </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-two">
		    <h5>Information </h5>
		    <ul class="list-unstyled">
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-three">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled">
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3 footer-four">
		    <h5>Helpful Links </h5>
		    <ul class="list-unstyled">
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
		</div>
	  </div>
	</div>
</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
</body>
</html>
