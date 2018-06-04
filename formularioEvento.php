<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniel Jiménez Chísica">
    <meta name="author" content="Andrey Niño">
    <meta name="author" content="Andres García">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Evento</title>
</head>
<body>
    
    <div class="formularioEvento">
        <div class="form">
            <h1>Crea un evento!!
            
            </h1>
            
            <p><input type="date" name="fecha" id="fecha"></p>
            <p><input type="time" name="hora" id="hora"></p>
            <p><textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descríbenos tu evento!"></textarea> </p>
            <p>¿Cuántas personas irán a tu evento?</p>
            <p><select name="integrantes" id="integrantes">
                <option value="0">Escoge una opción</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">Hasta 20</option>
                <option value="12">Hasta 30</option>
                <option value="13">Hasta 50</option>
                <option value="14">Hasta 80</option>
                <option value="15">Hasta 100</option>
                <option value="16">Más de 100</option>
                <option value="17">Otra cantidad</option>        
            </select>
            </p>
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
        </div>        
    </div>
    
</body>
</html>