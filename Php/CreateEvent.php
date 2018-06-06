<?php
echo 'Funciona ome gonorrea';
if (isset($_POST['send']))
{
    if(isset($_POST['fecha'],$_POST['hora'],$_POST['descripcion'],$_POST['integrantes'],
        $_POST['tipoEvento'],$_POST['latitude'],$_POST['longitude']))
    {
        $fecha=$_POST['fecha'];
        $hora=$_POST['hora'];
        $descripcion=$_POST['descripcion'];
        $integrantes=$_POST['integrantes'];
        $tipoEvento=$_POST['tipoEvento'];
        $latitude=$_POST['latitude'];
        $longitude=$_POST['longitude'];

        if (getimagesize($_FILES['image']['tmp_name'])!=FALSE){
            $image= addslashes($_FILES['image']['tmp_name']);
            $image=file_get_contents($image);
            $image=base64_encode($image);

            saveEvent($fecha,$hora,$descripcion,$integrantes,$latitude,$longitude,$tipoEvento,$image);
        } else {
            saveEvent($fecha,$hora,$descripcion,$integrantes,$latitude,$longitude,$tipoEvento);
        }
    }

    else
    {
        echo 'Please fill the required fields';
    }
}

function saveEvent($fecha,$hora,$descripcion,$integrantes,$latitud,$longitud,$tipo,$image=null)
{
    $con=mysqli_connect("localhost","root","thejoker1");
    mysqli_select_db($con,"MeetAndFun");
    $qry="insert into Evento (Fecha,Hora,Descripcion,Integrantes,Latitud,Longitud,Tipo_Evento,Foto) values('$fecha',
    '$hora','$descripcion','$integrantes','$latitud','$longitud','$tipo','$image')";
    $result=mysqli_query($con,$qry);
    if ($result){
        echo 'Inserted data';
    } else {
        echo 'Review your query';
    }
    mysqli_close($con);
}