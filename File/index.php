<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
    </head>
    <body><form name="LoginForm" action="form.php" method="POST">
            <table border="1" cellspacing="5" cellpadding="5">
                
                <tbody>
                    <tr>
                        <td colspan="2" align="center"> <?php 
                    if(isset($_GET['msg']))
                            echo $_GET['msg'];
                    else{
                        echo 'Welcome';
                    }
                    ?> 
                    </td>
                    <!--$_POST["username']-->
                    </tr>
                    <tr>
                        <td>User Name: </td>
                        <td><input type="text" name="username" value="" size="50" /></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="Password" value="" size="50" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login" name="login" /></td>
                        <td><input type="reset" value="Reset" name="reset" /></td>
                    </tr>
                     <tr>
                         <td><a href="newuser.php">NEW USER</a></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
        <?php
        
        ?>
  