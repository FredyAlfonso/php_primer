<?php
$title="ARRAYS";
include 'includes/header.php'
?>
    <h1>Arrays</h1>
    <?php
        //a variable
        $num=3;
        //an array
        //only one data type
        $numbers=array(1,2,3,4,5,6,7,8,9,10);

        echo $numbers[5];
        echo "<p>$numbers[9]</p>";

        $size=count($numbers);// función para obtener la longitud de un vector
        echo "<p>Array numbers is size: $size</p>";

        for ($count =0; $count <$size;$count++){
            echo "<p>El elemento de mi vector en su posición $count es: $numbers[$count]</p>";
        }
    ?>
<?php require 'includes/footer.php'; ?>