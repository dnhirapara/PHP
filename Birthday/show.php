<?php
    session_start();
    if(!isset($_SESSION["uname"])){
        $error="Please Login to View Your Home Screen";
        header("location: index.php?status=$error");
    }
?>
<html>
    <head>
        
    </head>
    <body>
       <?php include 'header.php';?>
        <table border="1" style="width: 25%">
            <tbody>
                <?php
                  $curr_mon=2;
                $curr_mon=$_COOKIE["remdate"."1"];
                $date=date_create($curr_mon);
                $temp=date_format($date,"Y/m/d");
                $time_input = strtotime($temp);  
                $date_input = getDate($time_input);
                print_r($date_input) ;
                echo '<tr><td align="center">Next Month\'s Birthday</td> </td>';
                for($i=1; $i<=$_SESSION["count"]; $i++){
                    $date=date_create($_COOKIE["remdate".$i]);
                    $temp=date_format($date,"Y/m/d");
                    $time_input = strtotime($temp);  
                    $date_input = getDate($time_input);
                    if($date_input['mon']!=$curr_mon){
                        echo '<tr>
                        <td>'.$_COOKIE["remname".$i].' on '.$date_input['mday'].'</td>';
                    }

                }
                echo '<tr><td align="center" >This Month\'s Birthday</td> </td>';
                for($i=1; $i<=$_SESSION["count"]; $i++){
                    $date=date_create($_COOKIE["remdate".$i]);
                    $temp=date_format($date,"Y/m/d");
                    $time_input = strtotime($temp);  
                    $date_input = getDate($time_input);
                    if($date_input['mon']==$curr_mon){
                        echo '<tr>
                        <td>'.$_COOKIE["remname".$i].' on '.$date_input['mday'].'</td>';
    //                    <td>'.$_COOKIE["remdate".$i].'</td>
    //                    </tr>';
                    }

                }
    //                echo 'cookie'.$i;
    //                echo date_format($date,"Y/m/d");  
    //                echo $curr_mon;
        ?>
            </tbody>
        </table>

        
    </body>
</html>
