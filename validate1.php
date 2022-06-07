<?php

include_once('connect.php');
$adminname = $_POST["adminname"];

session_start();
$emp = $adminname;
$_SESSION['varname99'] = $emp;


	
	
	$sql = "SELECT * from `employee` where Id='$adminname' ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result); 
	if($count == 1){  
        echo '<meta http-equiv="refresh" content="1; URL=emp.php" />';}
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
	
	


?>
