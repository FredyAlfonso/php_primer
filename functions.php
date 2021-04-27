<?php
$title="Functions";
include 'includes/header.php'
?>
    <h1>Functions</h1>
    <?php
        /*Defining a function*/
        function writeMessage()
        {
            echo "You are a really nice person, Have a nice Time!<br/>";
        }

        /*Calling a function*/
        writeMessage();
        writeMessage();
        writeMessage();
        writeMessage();

        /*Functions with parameters*/
        function addFunction($num1,$num2){
            $sum=$num1+$num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        addFunction(10,20);
        addFunction(107,2000);
        addFunction(1.5,1.2);

        //Prueba uno, las funciones tal como las conocía, variables internas no modifican las externas
        $num=500;
        function changeNumber($num){
            $num=$num+10;
            return($num);
        }

        echo "Original number: ".$num." modified: ".changeNumber($num);
        //Prueba dos, las funciones modifican los valores de las variables externas con las internas que se llamen igual

        $numf=500;
        function changeNumberf(&$numf){//el ampersand "&" se encarga de tal cosa
            $numf=$numf+10;
        }
        changeNumberf($numf);
        echo "<br/>".$numf;

    ?>
    <?php 
        require 'includes/footer.php';
    ?>