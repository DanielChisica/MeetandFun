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
    <title>Pagina de Inicio</title>
</head>
<body>
<section class="fondo2">
   <div class="container">

   <nav class="navbar navbar-expand-lg navbar-light">
    <div class="row col-xl col-lg col-md col-sm col justify-content-xl-center justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-center collapse navbar-collapse" id="navbarNav">
     <a class="navbar-brand" href="#">
        <img src="Recursos/logo%20blanco.png" class="d-inline-block align-top logo" alt="">
        </a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>



  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
      <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle btn btn-warning" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
        Ingresar</button>
      <div class="dropdown-menu">
          <form class="px-4 py-3">
            <div class="form-group">
              <label for="exampleDropdownFormEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="form-group">
              <label for="exampleDropdownFormPassword1">Password</label>
              <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dropdownCheck">
              <label class="form-check-label" for="dropdownCheck">
                Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
    </div>
<div class="ml-2"></div>
    <a href="formulario.php">
    <button  type="button" class="btn btn-outline-warning">Regitrase</button>
    </a>
 </div>
</nav>
</div>

<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1 class="font" style="color: white">Busca los mejores planes en tu ciudad</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
          <div class="btn-group margin">
                <button class="btn btn-secondary btn-lg dropdown-toggle btn1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Buscar planes
              </button>
              <div class="dropdown-menu dropdown-menu-right bg">
                <button class="dropdown-item" type="button"><i class="fas fa-beer"></i> Action</button>
                <button class="dropdown-item" type="button"><i class="far fa-futbol"></i> Another action</button>
                <button class="dropdown-item" type="button"><i class="fas fa-beer"></i> Something else here</button>
              </div>
            </div>
        </div>
        <div class="col-6">
           <form>
            <div class="d-flex">
                <input type="text" class="form-control ciudad form-control-lg" id="formGroupExampleInput" placeholder="Ciudad">
                <div  class="ml-3"></div>
                <button type="button" class="btn btn-success form-control-lg buscar"><i class="fas fa-search"></i> Buscar</button>
              </div>
            </form>

        </div>
    </div>
</div>

</section>

<div class="container">
  <div class="row">
      <div class="col-12 d-flex justify-content-center conten">
       <h6>Descubre lugares que les encantan a tus amigos.</h6>
       </div>
       </div>

   <div class="col-12  d-flex justify-content-center">
       <button type="button" class="btn facebook"><i class="fab fa-facebook-square"></i> Regístrate con Facebook</button>

   </div>
   <div class="col-12  d-flex justify-content-center">
   <p>or <a href="#">Regístrate con tu email!</a> y disfruta de una comunidad!</p>
    </div>

</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
</body>
</html>
