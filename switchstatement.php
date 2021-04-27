<?php
$title="Switch Statement";
include 'includes/header.php'
?>
    <h1>Switch Statements</h1>
    <?php
        $grade = 'B';//es case sensitive

        switch($grade){
            case 'A':
                echo "<h2 style = 'color:green'>You are a super Star!</h2>";
                break;
            case 'B':
                echo "<h2 style='color:blue'>You are doing well!</h2>";
                break;
            default:
                echo "<h2 style='color:red'>You are learning!</h2>";
                break;
        }
    ?>
    
    <?php 
        require 'includes/footer.php';
    ?>