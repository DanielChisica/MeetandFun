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
    <title>Meet & Fun</title>
    <style>
        .white-box
        {
            background-color: red;
            height: 200px;
            margin-bottom: 10px;
            font-size: 2em;
            text-align: center;
            padding: 80px;
        }
    </style>
</head>
    <!--
    EXTRA SMALL - .col-xs - devices less than 768px
    SMALL - .col-sm - devices greater than or equal to 768px
    MEDIUM - .col-md - devices greater than or equal to 992px
    LARGE - .col-lg - devices greater than or equal to 1200px
    -->
<body>
    <nav class="sticky-top navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between" style="background-color: #c7c9cc;">
       <div class="row col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-start">
    <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i>
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
      </div>

      <div class="row col-xl col-lg col-md col-sm col justify-content-xl-center justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-center collapse navbar-collapse" id="navbarNav">
         <a class="navbar-brand" href="#">
    <img src="Recursos/rocket.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Meet and Fun
      </a>
        </div>
        <div class="row col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 justify-content-xl-end justify-content-lg-end justify-content-md-end jusrify-content-sm-end justify-content-end">
        <button type="button" class="btn btn-primary">
        <i class="fas fa-envelope"></i>
        </button>


        </nav>

        <div class="container d-flex justify-content-center mb-3">
            <section class="bg-light radio col-4 justify-content-center">
               <ul class="nav justify-content-center">
                  <li class="nav-item">
                    <i class="fas fa-futbol icon mr-4 my-2"></i>
                  </li>
                  <li class="nav-item">
                    <i class="fas fa-beer icon mr-4 my-2"></i>
                  </li>
                  <li class="nav-item">
                    <i class="fab fa-playstation icon mr-4 my-2"></i>
                  </li>
                  <li class="nav-item">
                    <i class="fas fa-film icon mr-4 my-2"></i>
                  </li>
                </ul>

            </section>
        </div>
    <div class="col-md-8 col md offset-2">
        <div id="funCarousel" class="carousel slide" data-ride="carousel" data-interval="false" data-keyboard="false">
            <div class="carousel-inner">
                    <div class="carousel-item active col-md-8 col md offset-2 boxmodel">
                        <img class="d-block w-100 resized" src="Recursos/01.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Título del Evento</h5>
                            <p>Descripción</p>
                        </div>
                    </div>
                    <?php
                    include('Php/DisplayEvent.php');
                    displayEvent();
                    ?>
            </div>

            <div style="text-align: center">
                <a href="#funCarousel" role="button" data-slide="prev">
                    <span class="fas fa-undo backward" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#funCarousel" role="button" data-slide="next">
                    <span class="fab fa-gratipay liked" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <a href="#funCarousel" role="button" data-slide="next">
                    <span class="fas fa-times-circle rejected" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
        <div>
        </div>
    <!--<script type="text/javascript" src="JS/Functions.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
</body>
</html>
