<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Jiménez Chísica">
    <meta name="author" content="Andrey Niño">
    <meta name="author" content="Andres García">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario Evento</title>
    <style>
        #map, #pan {
            float: left;
            height: 400px;
            width: 400px;
        }
    </style>
</head>
<body>
    
    <div class="formularioEvento">
        <div class="form">
            <h1>Crea un evento!!</h1>
            
            <p><input type="date" name="fecha" id="fecha"></p>
            <p><input type="time" name="hora" id="hora"></p>
            <p><textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descríbenos tu evento!"></textarea> </p>
            <p>¿Cuántas personas irán a tu evento?</p>
            <p><input type="text" name="integrantes" id="integrantes"></p>
            <p>¿Qué tipo de evento es?</p>
            <p>
                <select name="tipoEvento" id="tipoEvento">
                    <option value="0">Escoge una opción </option>
                    <option value="1">Fiesta</option>
                    <option value="2">Cine</option>
                    <option value="3">Deportes</option>
                    <option value="4">Comida</option>
                    <option value="5">Cita</option>
                </select>
            </p>
            <p>Ubica el banderín sobre el lugar y dale click para traer la ubicación</p>
            <p><input type="text" name="latitude" id="lat">
                <input type="text" name="longitude" id="lon"></p>
            <div id="map"></div><div id="pan"></div>
            <p>Selecciona una imagen que identifique tu evento(Opcional)</p>
            <br/>
            <input type="file" name="image" value="Examinar">
            <br/><br/>
            <input type="submit" name="send" value="Crear Evento">
        </div>
    </div>
    <script src="JS/Maps.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChTzXzJ1CWsrWn51ke7cXcu-2-fBqmy_I&callback=initMap"></script>
</body>
</html>