<?php declare(strict_types=1) ?>
<?php 
    session_start();
    if(!isset($_SESSION["uname"])){
        $error="Please Login to View Your Home Screen";
        header("location: index.php?status=$error");
    }
    if(!isset($_SESSION["count"])){
        $_SESSION["count"]=0;
    }
//    $_SESSION['uname']= filter_input(INPUT_GET, "status");
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
//                            echo "remname".$_SESSION["count"];
//                            echo $_COOKIE["remname1"];
                            echo '<td align="center">'."Reminder Set".'</td>';
                        } else {
                            echo '<td align="center">'."Clean India".'</td>';
                        }
                    ?>
                </tr>
            </tbody>
        </table>

    </body>
</html>

