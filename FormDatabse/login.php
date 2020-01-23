<?php
try{
	//$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=ce4_49','ce4_49','ce4_49');
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=trial','root','');
	echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="select * from test";
	$query=$dbhandler->prepare($sql);
	$query->execute();
        $r=$query->fetch(PDO::FETCH_NUM);
        //echo print_r($r);
//        echo $r[3];
        $date = strtotime($r[3]);
        echo date('j F Y', $date);
        //echo date($r[3]);

}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>