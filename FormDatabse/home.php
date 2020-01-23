<?php
try{
	//$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce4_49','ce4_49','ce4_49');
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=trial','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(!empty($username) && !empty($password))
			{
	$sql="insert into test (rollno,name,dob) values (?,?,?)";
	$query=$dbhandler->prepare($sql);
	$query->execute(array($_POST['password'],$_POST['username'],$_POST['date']));
	header("location: login.php");
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