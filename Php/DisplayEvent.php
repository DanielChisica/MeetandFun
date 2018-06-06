<?php
/**
 * Created by PhpStorm.
 * User: danielchisica
 * Date: 5/06/18
 * Time: 11:42 PM
 */

function displayEvent()
{
    $con=mysqli_connect("localhost","root","thejoker1");
    mysqli_select_db($con,"MeetAndFun");
    $qry="SELECT * FROM Evento LIMIT 10";
    $result=mysqli_query($con,$qry);

    while($row=mysqli_fetch_array($result))
    {
        echo '
        <div class="carousel-item col-md-8 col md offset-2 boxmodel">
                    <img class="d-block w-100 resized" src="data:Foto;base64,'.$row[8].'">
                    <div class="carousel-caption d-none d-md-block">
                        <p>'.$row[3].'</p>
                    </div>
                </div>
        ';
    }
    mysqli_close($con);
}