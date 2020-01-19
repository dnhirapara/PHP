<?php
    $username="admin";
    $password="admin";
    if($username===$_POST["username"] && $password===$_POST["password"]){
        $error="success";
        header("location: home.php?status=$error");
    }else{
        $error="Username or Password Invalid";
        header("location: index.php?status=$error");
    }
?>