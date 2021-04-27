<?php
$title="Date and Time Manipulattion";
include 'includes/header.php'
?>
    <h1>Date and Time Manipulation</h1>
    <?php
        ini_set('date.timezone','America/Bogota');//esto establece la zona horaria de Bogotá, si se deja
        //por defecto, toma la de parís
        $datenow=getdate();//función para recuperar la fecha actual
        echo "Today's date<br/>";
        echo $datenow['mday']."<br/>";//si pone todo dentro de comillas no funciona
        echo $datenow['mon']."<br/>";//para el mes
        echo $datenow['year']."<br/>";//para el año

        echo "Today's date ".$datenow['mon']."/".$datenow['mday']."/".$datenow['year'];//si se quiere todo en conjunto
        echo "<br/>".time();//La forma que no se entiende nada

        echo "<br/>";//un salto de línea
        print date("m/d/y G.i:s<br>",time())."<br/>";
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());
    ?>

    <?php 
        require 'includes/footer.php';
    ?>