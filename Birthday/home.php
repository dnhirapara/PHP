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
                            $date1 = new DateTime("now");
                            $date2 = new DateTime($_POST["bday"]);
                            echo $_POST["bday"];
                            $diff=$date2->diff($date1);
                            $year=$diff->format('%y');
                            $month=$diff->format('%m');
                            $date_input1 = getDate();
                            $temp=date_format($_POST["bday"],"Y-m-d");
                            $time_input = strtotime($temp); 
                            $date_input2 = getDate($time_input);
                            if(($date_input2["year"]-$date_input1["year"]) == $year){
                                $days=((12-$month)*30)+$diff->format('%d');
                                echo $days;
                            }else{
                                $days=(($month)*30)+$diff->format('%d');
                                echo $days;
                            }
                            print_r( $date1 ) ; 
                            print_r( $date2 ) ; 
//                            echo $date1->format('     D M Y');
                            $days=1;
                            $_SESSION["count"]=$_SESSION["count"]+1;
                            setcookie("remname".$_SESSION["count"], $_POST["reminder_name"], time()+(86400 * $days));
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

