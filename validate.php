<?php

include_once('connect.php');
$adminname = $_POST["adminname"];
$password = $_POST["password"];



	
	
	$sql = "SELECT * from `admin` where Username='$adminname' And `Password`='$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result); 
	if($count == 1){  
        echo '<meta http-equiv="refresh" content="1; URL=admin.php" />';}
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
	
	


?>
