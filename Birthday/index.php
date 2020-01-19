<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id='login-form' action="validate.php" method='post'><table border="1" width="1" cellspacing="1" cellpadding="1">
         
                <table border="1" width="1" cellspacing="1" cellpadding="1">
                  
                    <tbody>
                        <tr>
                            <?php 
                                if(!isset($_GET["status"])){
                                    echo '<td colspan="2" align="center">Clean India</td>';
                                }else{
                                    echo '<td colspan="2" align="center">'. filter_input(INPUT_GET, "status").'</td>';
                                }
                            ?>
                        </tr>
                        <tr>
                            <td>UserName</td>
                            <td><input type="text" name="username" placeholder="Username" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" placeholder="Password" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type='submit'>Login</button> &nbsp; &nbsp;<input type="reset" value="Reset" name="reset" /></td>
                        </tr>
                    </tbody>
                </table>
        </form>
        
        <?php
        
        ?>
    </body>
</html>
