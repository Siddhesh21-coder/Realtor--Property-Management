<?php


// connect to the database
include('connect.php');
session_start();
$prp = $_SESSION['varname18'];
$pas = $_SESSION['varname'];
$sq = "SELECT * from customer where User_ID='$pas'";
$que = mysqli_query($con,$sq);
$re = mysqli_fetch_array($que);
// REGISTER USER

//echo $re['Customer_ID'];




  $query = "INSERT INTO wishlist VALUES (NULL,'$prp','$re[Customer_ID]')";
  mysqli_query($con,$query);
  echo "<h1> Property Added to wishlist<h1><Br>";
  echo "<h1><a href='show.php'>Click To see you wishlist</a></h1>";

  //	if(mysqli_query($db, $query))
    //{
      //  header('location: index.php');
    //}
  	//else
    //{
     //   echo "error";
    //}
//}
mysqli_close($con);
?>