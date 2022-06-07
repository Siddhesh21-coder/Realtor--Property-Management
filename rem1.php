<?php


// connect to the database
include('connect.php');
session_start();
$reg_id=$_POST['reg_id'];

$reg_id1=$_POST['reg_id1'];
$fname = $_POST['fname'];

// REGISTER USER

//echo $re['Customer_ID'];
//echo $reg_id;
//echo $re['Customer_ID'];
$fe = "INSERT INTO empc VALUES ('$fname','$reg_id1')";
$ram = mysqli_query($con,$fe);


  $query = "DELETE FROM manageprop WHERE Owner_ID='$reg_id1' AND `Type`='$reg_id'";
  $ab = mysqli_query($con,$query);
  //echo $ab;
  
  if($ab){

  //echo $rea['WishID'];
 
    echo '<meta http-equiv="refresh" content="1; URL=admin.php" />';

  //	if(mysqli_query($db, $query))
    //{
      //  header('location: index.php');
    }
  	else
    {
        echo "error";
    }
//}
mysqli_close($con);
?>