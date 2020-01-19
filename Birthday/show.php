<?php
    session_start();
    if(!isset($_SESSION["uname"])){
        header("location: index.php");
    }
?>
<html>
    <head>
        
    </head>
    <body>
       <?php include 'header.php';?>
        
    </body>
</html>
