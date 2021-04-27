<?php
$title="WHILE/DO-WHILE LOOPS";
include 'includes/header.php'
?>

    <h1>While loop</h1>
    <?php
        $grade=0;
        while($grade <10){
            echo "<p>I am less than 10!</p>";
            $grade++;
        }
        echo "<p>EXIT LOOP!</p>";
    ?>

    <h1>Do While Loop</h1>
    <?php
    //$grade=0; // no es necesario volver a inicializarla ya que en el anterior trozo de php ya estaba creada
    //la variable
    do {
        echo "<p>I am do while loop</p>";
    }while($grade <10);//observe que se realiza la acción al menos una vez
    ?>
    <?php 
        require 'includes/footer.php';
    ?>