<?php 
$con = new mysqli('localhost','root','','crud');
if($con){
    echo "connection successful";
}

else{
    die(mysqli_error($con));
}




?>