<?php declare(strict_types=1) ?>
<?php 
    session_start();
    if(isset($_GET["status"])){
        header("location: index.php");
    }
    $_SESSION['uname']= filter_input(INPUT_GET, "status");
?>
<html>
    <head>
        
    </head>
    <body>
       <?php include 'header.php';?>
        <table border="1" width="1" cellspacing="1" cellpadding="1" style="width: 25%">
            <thead>
                <tr>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. <a href="set.php">Set Reminder</a><br>2. <a href="show.php">Show Reminders</a></td>
                </tr>
                <tr>
                    <?php
                        if(isset($_POST["reminder_name"]) && isset($_POST["bday"])){
                            //setcookie("")
                            $_SESSION["count"]=$_SESSION["count"]+1;
                            setcookie("remname".$_SESSION["count"], $_POST["reminder_name"]);
                            setcookie("remdate".$_SESSION["count"], $_POST["bday"]);
                            echo '<td align="center">'.$_POST["bday"].'</td>';
                        } else {
                            echo '<td align="center">'."Clean India".'</td>';
                        }
                    ?>
                </tr>
            </tbody>
        </table>

    </body>
</html>

