<?php
    if(empty($_POST['uname']) || empty($_POST['pass']) ||empty($_POST['email']) || empty($_POST['mobile'])){
        header("location: index.php");
    }else{
        $mobile=$_POST['mobile'];
        $mob_pattern="/\d{10}/";
        $mob_check= preg_match($mob_pattern, $mobile);
        $uname=$_POST['uname'];
//        $pass=$_POST[''];
        $email=$_POST['email'];
       $email_pattern="/\w+@\w+\.\w+/";
       $email_check= preg_match($email_pattern, $email);
       if($mob_check==1 && $email_check==1){
           echo 'Welcome';
       }else{
           header("location: index.php");
       }
       echo basename($_SERVER['PHP_SELF']);
       echo $mob_check.' '.$email_check;
       echo $email.' '.$mobile.' '.$uname;
    }
?>
 <?php
echo getcwd();
?> 
 <?php
$dir = "/var/www/html/web/ce049/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo '<a href='.$dir.$file.'>'.$file.' </a>';
    }
    closedir($dh);
  }
}
?> 