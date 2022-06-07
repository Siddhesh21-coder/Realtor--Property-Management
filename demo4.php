<?php
    session_start();
    $user1 = $_SESSION['varname6'];
    $pass1 = $_SESSION['varname7'];
		
		$conn = mysqli_connect("localhost", "root", "", "target");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

$num = "select USER_ID from user where Username = '$user1' and Password = '$pass1' ";
$result1 = mysqli_query($conn, $num);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$sql2 = "INSERT INTO customer VALUES (NULL,'$row1[USER_ID]') ";

if(mysqli_query($conn,$sql2)){
echo '<meta http-equiv="refresh" content="1; URL=lsig.html" />';}

else{
    echo "ERROR: Hush! Sorry $sql2 . "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

            