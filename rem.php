<?php


// connect to the database
include('connect.php');
session_start();
$reg_id=$_POST['reg_id'];
$pas = $_SESSION['varname'];
$sq = "SELECT * from customer where User_ID='$pas'";
$que = mysqli_query($con,$sq);
$re = mysqli_fetch_array($que);
// REGISTER USER

//echo $re['Customer_ID'];
//echo $reg_id;
//echo $re['Customer_ID'];
$fe = "SELECT * FROM wishlist Where PrpID='$reg_id' AND CustID='$re[Customer_ID]'";
$ram = mysqli_query($con,$fe);
$rea = mysqli_fetch_array($ram);

  $query = "DELETE FROM wishlist WHERE WishID='$rea[WishID]'";
  $ab = mysqli_query($con,$query);
  //echo $ab;
  
  if($ab){

  //echo $rea['WishID'];
  echo "<h1> Property Removed from wishlist<h1><Br>";
  echo "<h1><a href='show.php'>Click To see you wishlist</a></h1>";

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