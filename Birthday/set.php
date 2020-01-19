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
        <table border="1" width="1" cellspacing="1" cellpadding="1" style="width: 25%">
            <form name="set_reminder" action="home.php?status=set" method="POST">
            <tbody>
                <tr>
                    <td width="40%">Name: </td>
                    <td width="70%"><input type="text" name="reminder_name" value="" width="100%" required/></td>
                </tr>
                <tr>
                    <td width="40%">Date: </td>
                    <td width="70%"><input type="date" name="bday" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Set Reminder" name="submit" /></td>
                </tr>
            </form>    
        </table> 
    </body>
</html>
