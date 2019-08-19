<?php
$Name = $_REQUEST['Name'];
$Email_id = $_REQUEST['Email_id'];
$Mobile = $_REQUEST['Mobile'];
$Password = $_REQUEST['Password'];





$con = mysqli_connect("localhost","root","","rideshare");
// Check connection
 $query = "INSERT into `signup` (Name, Email_id, Mobile, Password)
VALUES ('$Name', '$Email_id', '$Mobile', '$Password')";

$result = mysqli_query($con,$query);
 
        if($result)
        {
     
          echo "success";

         }
         else 
         {
         	echo "failed";
         }
         




?>
