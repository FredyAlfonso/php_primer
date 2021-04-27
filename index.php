    <?php 
        $title="Index";
        include 'includes/header.php' //código para inlcuir un archivo
    ?>
    <h1>Hello HTML - PHP Primer</h1>
    <!-- basic HTML -->
    <br/>
    <?php 
        //Esto es un comentario en PHP
        /* esto también, parece Java*/
        echo 'Holi PHP!';
        echo '<br/>';//esto funciona como salto de línea
        echo 'Second Line';
     
        echo '<br/>';
        $name='Fredy Alfonso';
        $age=24;
        echo 'My name is '.$name;//El operador '.' es el de concatenación en PHP
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h2>My age is: '.$age.'</h2>';

        echo "<h1>My name is: $name </h1>";//con comillas dobles es más fácil
    ?>
    <button type="button" class="btn btn-dark">CLICK ME</button>
    <?php
        require 'includes/footer.php';//a diferencia del include, este crea una dependencia
    ?>