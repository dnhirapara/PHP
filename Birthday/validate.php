<?php 
    session_start();
//    if(!isset($_POST["username"])){
//        header("location: index.php");
//    }
//    $_SESSION['uname']= filter_input(INPUT_GET, "status");
?>
<?php
    $username="1";
    $password="1";
    if($username===$_POST["username"] && $password===$_POST["password"]){
        $_SESSION['uname']= $_POST["username"];
//        echo isset($_SESSION["uname"]);
        $error=$_POST['username'];
        header("location: home.php?status=$error");
    }else{
        $error="Username or Password Invalid";
        session_destroy();
        header("location: index.php?status=$error");
    }
?>