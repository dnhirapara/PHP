<html>
    <head>
        
    </head>
    <body>
        <form name="home" action="upload.php" method="POST" enctype="multipart/form-data">
            <table border="1" cellspacing="2" cellpadding="2">
                
                <tbody>
                    <tr>
                        <td colspan="2" align="center"> <?php 
                    if(isset($_GET['msg']))
                            echo $_GET['msg'];
                    else{
                        echo 'Enter Data';
                    }
                    ?> 
                    </td>
                    <!--$_POST["username']-->
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="username" value="" size="50" required/></td>
                    </tr>
                    <tr>
                        <td>New Password: </td>
                        <td><input type="password" name="password" value="" size="50" required/></td>
                    </tr>
                    <tr>
                        <td>ReEnter New Password: </td>
                        <td><input type="password" name="repassword" value="" size="50" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2">Gender: Male<input type="radio" name="gender" value="Male"  required/> Female <input type="radio" name="gender" value="Female" /> </td>
                    
                    </tr>
                    <tr>
                        <td>Birth Date: </td>
                        <td><input type="date" name="date" required></td>
                    </tr>
                    <tr>
                        <td>Interested In:</td>
                        <td><input type="checkbox" name="train" value="Training" required/>Training <input type="checkbox" name="place" value="Placement" />Placement</td>
                    </tr>
                    <tr>
                        <td colspan="2">Achievement: </td>
                       
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="achievement" rows="4" cols="20">
                    </textarea></td>
                        
                    </tr>
                    <tr>
                        <td>Select Your File: </td> <td colspan="2"><input type="file" name="myFile" id="myFile"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit" name="submit" /></td>
                        <td ><input type="reset" value="Reset" name="reset" /> &nbsp;&nbsp;&nbsp; <a href="home.php">Home</a></td>
                  
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>