<?php

session_start();
if(isset($_POST['username']))$username=$_POST['username'];else $username="DefaultUser";

/*if (!file_exists('upload')) 
{
    mkdir('upload', 0777, true);
}*/

if(!empty($_FILES["myFile"]["name"]))
	{
		$target_location="/var/www/html/web/ce049/upload/".basename($_FILES["myFile"]["name"]);
                
                if(in_array($ext, $allowed_ext) &&  $allowed_size < 300000){
                    if(! (move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_location)))
			echo "Error: " . $_FILES["myFile"]["error"] . "<br>";
                    else
                    {
                        $allowed_ext= array( ".jpeg",".png");
                            $ext = pathinfo($target_location, PATHINFO_EXTENSION);
                            $allowed_size = $_FILES["myfile"]["size"];
                            if(in_array($ext, $allowed_ext) &&  $allowed_size < 300000){
                                $var=$_FILES["myFile"]["type"];
                                $new="/var/www/html/web/ce049/upload/".$username.".".$ext;
                                rename($target_location,$new);
                                header("location:index.php?msg=Congrats $username.$var, Your File is Successfully Uploaded.");
                            }else{
                                header("location:newuser.php?msg=file size and type not matched");
                            }


                    }
                }
		
	}
?>