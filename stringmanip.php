<?php
$title="String Manipulation";
include 'includes/header.php'
?>
    <?php
        //Concatenation of Strings
        $phrase1 = "Student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "fredy alfonso";
        echo $phrase1 . ", named Tiffany, " . $phrase2;//el punto es el operador de concatenado en php
        echo "<hr/>";//línea horizontal
        //Transformation of strings
        echo "<br/>Uppercase first letter: " . ucfirst($name)."<br/";//Primera letra de la cadena se pone en mayúscula
        echo "<br/>Uppercase first letter of each word: ".ucwords($name);//Todas las primeras letras en mayúscula
        echo "<br/> Uppercase: ".strtoupper($name);//Todas a mayúscula
        echo "<br/> Lowercase: ".strtolower("THIS WAS ALL UPPERCASE!");//Todo a minúscula
        echo "<hr/>";
        echo "<br/>Repeat String: ".strtoupper(str_repeat('a',10))."<br/>";//observe que se pueden anidar las funciones
        echo "<br/>Get a substring: ".substr($name,3,5);//función para hacer un substring
        echo "<br/>Get position of string ".strpos($name,"alfonso");//posición donde comienza una cadena dentro de otra
        echo "<br/>Find length of a string: ".strlen($name);

        //Borrar espacios de una cadena
        echo "<br/>Without Trim: "."A"." B C D "."E";
        echo "<br/>Trim spaces on both sides: "."A".trim(" B C D ")."E";//elimina los espacios a los lados
        echo "<br/>Trim spaces to the left: "."A".ltrim(" B C D ")."E";//elimina los espacios a la izquierda
        echo "<br/>Trim spaces to the right: "."A".rtrim(" B C D ")."E";//elimina los espacios a la derecha
        echo "<br/>Replace string with another: ".str_replace("alfonso","lancheros",$name);//remplaza el primer elemento por el segundo del tercer elemento
        echo "<br/>".$name;//para comprobar si lo anterior, modifica la variable, pero no, la función reemplazo
        //solamente cambia la cadena de salida, no la variable.
    ?>
    <?php 
        require 'includes/footer.php';
    ?>