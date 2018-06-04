<?php
if (isset($_POST['imgsubmit']))
{
    if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
    {
        print 'Please select an image';
    }

    else
    {
        $image= addslashes($_FILES['image']['tmp_name']);
        $image=file_get_contents($image);
        $image=base64_encode($image);
        saveimage($image);
    }
}

if (isset($_POST['imgdisplay']))
{
    displayimage();
}

function saveimage($image)
{
    $con=mysqli_connect("localhost","root","thejoker1");
    mysqli_select_db($con,"MeetAndFun");
    $qry="insert into Evento (Fecha,Hora,Descripcion,Integrantes,Latitud,Longitud,Tipo_Evento,Foto) values('2018-05-01','08:00:00','Full Mera fiesta, full farra',11,0,0,1,'$image')";
    $result=mysqli_query($con,$qry);
}

function displayimage()
{
    $con=mysqli_connect("localhost","root","thejoker1");
    mysqli_select_db($con,"MeetAndFun");
    $qry="select * from Evento";
    $result=mysqli_query($con,$qry);

    while($row=mysqli_fetch_array($result))
    {
        echo '
        <div class="carousel-item col-md-8 col md offset-2 boxmodel">
                    <img class="d-block w-100 resized
                    " src="data:Foto;base64,'.$row[8].'">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titulo</h5>
                        <p>Descripción</p>
                    </div>
                </div>
        ';
    }
    mysqli_close($con);
}