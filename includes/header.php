<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Según el profe del curso, en el header se incluyen los css -->
    <!-- CSS only AQUÍ SE TIENE LA IMPORTACIÓN DE BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css"><!--Código de importación de una fuente de google -->
     <link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300&display=swap" rel="stylesheet" type="text/css">
     <style>
     /*Esto es CSS, sacado de free Code Camp*/
        .miEstilo{
            font-size: 16px;
            font-family:Lobster, monospace;
        }

        .estiloFooter{
            font-size: 40px;
            font-family:Karantina, bold;
            color:blue;
            font-style:italic;
        }
    </style>

    <title>PHP Primer - <?php echo $title ?></title><!--Observe que el título se vuelve dinámico gracias al php -->
</head>
<body>
    <div class='container'>
    <h2 class='miEstilo'>Follow each link to the page example</h2>
    <u1 class='nav nav-pills'>
        <li class='nav-item'><a class="nav-link" href="index.php">Home</a></li>
        <li class='nav-item'><a class="nav-link" href="array.php">Simple array and printouts</a></li>
        <li class='nav-item'><a class="nav-link" href="forloop.php">Simple For loop</a></li>
        <li class='nav-item'><a class="nav-link" href="whiledowhileloop.php">Simple While/do while Loop</a></li>
        <li class='nav-item'><a class="nav-link" href="ifstatement.php">Simple if Statement</a></li>
        <li class='nav-item'><a class="nav-link" href="switchstatement.php">Simple Switch statement</a></li>
        <li class='nav-item'><a class="nav-link" href="stringmanip.php">Simple String Manipulation</a></li>
        <li class='nav-item'><a class="nav-link" href="datetimemanip.php">Simple Date and Time Manipulation</a></li>
        <li class='nav-item'><a class="nav-link" href="functions.php">Functions</a></li>
    </u1>
    