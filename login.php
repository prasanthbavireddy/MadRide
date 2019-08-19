<?php

$Email_id = $_POST['Email_id'];
$Password = $_POST['Password'];





$con = mysqli_connect("localhost","root","","rideshare");
// Check connection

 $query = "select * from login where Email_id='$Email_id' and Password= '$Password'";

$result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     
           echo "success";
           header("Location: homepage.html");
    
         }

else{
	echo "Failed";
}
?>