<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce4_49','ce4_49','ce4_49');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(!empty($username) && !empty($password))
			{
	$sql="insert into login (user,password,gender,bday,message) values (?,?,?,?,?)";
	$query=$dbhandler->prepare($sql);
	//bind and execute directly
	$query->execute(array($_POST['username'],$_POST['password'],$_POST['gender'],$_POST['date'],$_POST['achievement']));
	
	//bind and execute through variables
	
			}
		else
			{
				echo "Something went wrong...";
			}
	}

}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>



<?php
echo "you are successfully loggedin"
?>