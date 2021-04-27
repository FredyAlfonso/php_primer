<?php
$title="FOR LOOP";
include 'includes/header.php'
?>
    <h1>FOR LOOP IN PHP</h1>
    <?php
        //For loops
        for ($count=0; $count<10; $count++){
            //tenga en cuenta que sale en difrentes lineas (pirntln()) debido a los <p> de html, o si no, 
            //saldría en una sola línea
            echo "<p>Hello World: $count </p>";
        }
        
    ?>
    <?php 
        require 'includes/footer.php';
    ?>