<?php
    session_start();
    $user = $_SESSION['varname5'];
    $pass = $_SESSION['varname3'];
		
		$conn = mysqli_connect("localhost", "root", "", "target");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

$num = "select USER_ID from user where Username = '$user' and Password = '$pass' ";
$result1 = mysqli_query($conn, $num);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$sql2 = "INSERT INTO owners VALUES ('$row1[USER_ID]',NULL) ";
if(mysqli_query($conn,$sql2)){
echo '<meta http-equiv="refresh" content="1; URL=owner.html" />';}

else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

            