<?php
    session_start();
    if(!isset($_SESSION["uname"])){
        $error="Please Login to View Your Home Screen";
        header("location: index.php?status=$error");
    }
?>
<?php
session_destroy();
$error="You successfully loggedout";
header("location: index.php?status=$error");
?>