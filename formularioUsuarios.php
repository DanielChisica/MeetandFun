<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Jiménez Chísica">
    <meta name="author" content="Andrey Niño">
    <meta name="author" content="Andres García">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
<!--   debe tener foto de perfil, nombre de usuario, biografía y redes sociales-->
   <div class="formulario">
      <!--Acá debería estar el nombre del usuario que debería salir de la base de datos.-->
      
      <h1 id="nombreUsuario" name="nombreUsuario"> ... </h1>
      <textarea name="biografia" id="biografia" cols="30" rows="10" placeholder="Cuéntanos un poco más de ti"></textarea>
      
      
      
      <div class="redes">
          <p>
              Ingresa los URLs de tus redes sociales:
          </p>
          
          <p>
              <i class="fa fa-facebook-square" style="font-size:24px;color:blue"></i>
              www.facebook.com/ 
              <input type="text" name="usuarioFB" id="usuarioFB" placeholder="usuario Facebook">
          </p>
          
          <p>
              <i class="fa fa-instagram" style="font-size:24px;color:red"></i>
              www.instagram.com/
              <input type="text" name="usuarioIG" id="usuarioIG" placeholder="usuario Instagram">
          </p>
          
          <p>
             <i class="fa fa-twitter" style="font-size:24px;color:deepskyblue"></i>
             www.twitter.com/
             <input type="text" name="usuarioTW" id="usuarioTW" placeholder="usuario Twitter">
          </p>
          
      </div>
       
   </div>
    
</body>
</html>