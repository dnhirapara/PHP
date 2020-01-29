<?php
    session_start();
?>
<?php
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=trial','root','');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="delete from test where name=? and pass=?";
        $query=$dbhandler->prepare($sql);
        $query->execute(array($_SESSION["uname"],$_SESSION["pass"]));
        header("location: index.php");
?>
