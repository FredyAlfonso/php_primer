<?php
$title="If Statement";
include 'includes/header.php'
?>
    <h1 style="color: red">IF-ELSE STATEMENTS</h1>
    <?php
        //An if statement that will carry out an action based on the value of the variable
        echo "<h2>If statement</h2>";
        $grade=50;

        if ($grade>=50){
            echo "<h3 style='color: green'>You have passed</h3>";
        }
        else{
            echo "<h3 style='color: red'>You haven't passed</h3>";
        }
        //para mostrar que php es flexible con las variables, se hace un mierdero
        $grade = 'B';
        if ($grade=='A'){
            echo "<h2 style='color: green'>YOU ARE A SUPER STAR!</h2>";
        }
        elseif ($grade=='B'){
            echo "<h2 style='color: blue'>You did well!</h2>";
        }
        else{
            echo "<h2 style='color: red'>You are learning!</h2>";
        }
    ?>
    <?php 
        require 'includes/footer.php';
    ?>