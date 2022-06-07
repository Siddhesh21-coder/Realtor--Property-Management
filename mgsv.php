<?php


// connect to the database
include('connect.php');
session_start();


$pas = $_SESSION['varname'];
$mnum = $_REQUEST['mnum'];
		$uname = $_REQUEST['uname'];
		$state = $_REQUEST['state'];
    $sq = "SELECT * from owners where USER_ID='$pas'";
    $que = mysqli_query($con,$sq);
    $re = mysqli_fetch_array($que);
  if(!empty($_POST["service"]))
  {
    foreach($_POST["service"] as $service)
    {
      
      $q1 = "INSERT INTO manageprop VALUES (NULL,'$re[OwnerID]','$mnum','$uname','$state','$service')";
      $r1 = mysqli_query($con,$q1);
      //echo $service;
    }

  }
  echo "<br><br><br><br><h1><center> Your request has been posted</h1>";
  echo "<h1><center> You will recieve a call from our employee and expected cost of service will be conveyed from them</h1>";
  echo "<center><a href='BAC1.php'><h3>Go Back</h3></a>";
    

    /*if(!empty($_POST))
    {
      $q1 = "INSERT INTO manageprop VALUES (NULL,'$re[OwnerID]','$mnum','$uname',$state','$ser1'";
      $r1 = mysqli_query($con,$q1);
    }
    foreach($ser as $selected) {
      echo "<p>".$selected ."</p>";
      }*/


mysqli_close($con);
?>