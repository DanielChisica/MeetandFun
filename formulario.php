<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Jiménez Chísica">
    <meta name="author" content="Andrey Niño">
    <meta name="author" content="Andres García">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de Registro</title>

</head>
<body>

<section class="img">
  <nav class="navbar navbar-light justify-content-center">
  <a class="navbar-brand" href="#">
    <img  class="logo" src="Recursos/logo2-01.png"  alt="">
  </a>
</nav>
   <div class="container">
      <div class="row">
      <div class="col beinvenida">
          <h2>Bienvenido ingresa para conocer nuevas personas</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit nibh, ad aliquet fames feugiat arcu consequat conubia inceptos volutpat, eleifend platea cubilia.</p>
      </div>
      <div class="col-6 form">
      <div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item ">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<i class="fas fa-user"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<i class="fas fa-sign-in-alt btm-primary"></i>
						</a>
					</li>
				</ul>
      <div class="tab-content ">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6 mt-3">Registrate </div>
						<form class="content">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Nombre</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Apellido</label>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Email</label>
										<input class="form-control" placeholder="" type="email">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Password</label>
										<input class="form-control" placeholder="" type="password">
									</div>

									<div class="form-group date-time-picker label-floating">
										<label class="control-label">Fecha de Nacimiento</label>
										<input name="datetimepicker" value="10/24/1984"/>
										<span class="input-group-addon">
											<i class="far fa-calendar-alt"></i>
										</span>
									</div>
									<div class="form-group label-floating is-select">
										<label class="control-label">Genero</label>
										<select class="selectpicker form-control" size="auto">
											<option value="MA">Hombre</option>
											<option value="FE">Mujer</option>
											<option value="OT">Otro</option>
										</select>
									</div>

									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Acepto los<a href="#">Terminos y Condiciones</a> del Sitio.
											</label>
										</div>
									</div>

									<a href="#" class="btn boton btn-lg full-width">Complete Registration!</a>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Acceder a la Cuenta</div>
						<form class="content">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Email</label>
										<input class="form-control" placeholder="" type="email">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Password</label>
										<input class="form-control" placeholder="" type="password">
									</div>

									<div class="remember mb-4">

										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Recordarme
											</label>
										</div>
										<a href="#" class="forgot">Olvide mi Contraseña</a>
									</div>

									<a href="#" class="btn btn-lg  full-width boton">Login</a>

									<div class="mt-2"></div>

									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f"></i> Acceder con  Facebook</a>
									<div class="mt-2"></div>

									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter"></i> Acceder con Twitter</a>

                                    <div class="mt-3"></div>
									<p>No tienes cuenta? <a href="#home">Registrate ahora!</a> y disfruta de una comunidad!</p>
								</div>
							</div>
						</form>
					</div>
				</div>

    </div>
</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>

</body>
</html>

