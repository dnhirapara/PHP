<?php
    session_start();
    
?>
<?php
try{
	//$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce4_49','ce4_49','ce4_49');
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=trial','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $username=$_POST['username'];
        $password=$_POST['password'];
        //echo $username.$password;
	if(isset($_POST['username']) && isset($_POST['password']))
	{
                $_SESSION["uname"]=$username;
                $_SESSION["pass"]=$password;
//		$username=$_POST['username'];
//		$password=$_POST['password'];
                //echo $username.$password;
		if(!empty($username) && !empty($password))
                {
                    //echo $username.$password;
                    $sql="select * from test where name=? and pass=?;";
                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $query=$dbhandler->prepare($sql);
                    $query->execute(array($username,$password));
                    $count = $query->rowcount();
                    $r=$query->fetchAll(PDO::FETCH_NUM);
                    if($count>0){
                    //echo print_r($r);
                    
                        echo '
                        <html>
                            <head>
                                <title>TODO supply a title</title>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            </head>
                            <body>
                                <div>
                                    <table border="1">
                                        <tbody>
                                            <tr>
                                                <td>ID: </td>
                                                <td>'.$r[0][0].'</td>
                                                <td rowspan="7"><a href="delete.php">DELETE</a></td>
                                            </tr>
                                            <tr>
                                                <td>Username: </td>
                                                <td>'.$r[0][1].'</td>
                                            </tr>
                                            <tr>
                                                <td>Gender: </td>
                                                <td>'.$r[0][2].'</td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth: </td>
                                                <td>'.$r[0][3].'</td>
                                            </tr>
                                            <tr>
                                                <td>Training: </td>
                                                <td>'.$r[0][4].'</td>
                                            </tr>
                                            <tr>
                                                <td>Palcement:</td>
                                                <td>'.$r[0][5].'</td>
                                            </tr>
                                            <tr>
                                                <td>Achievement: </td>
                                                <td>'.$r[0][6].'</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </body>
                        </html>
                        ';
                    }
                }
		else
                {
                        echo "Something went wrong...";
                }
	}

}
catch(PDOException $e){
    echo 'hello';
	echo $e->getMessage();
	die();
}
?>