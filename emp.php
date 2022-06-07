<!DOCTYPE html>
<html>
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 

</head>
<?php
 session_start();
include('connect.php');
  $pas = $_SESSION['varname99']
  
 
  ?>
  <body>
  <br>
  <div class="container">
    <h1 class="text-center text-white bg-dark">Property details</h1>
    <br>
    <div class="table-responsive ">
      <table class="table table-bordered table-striped table-hover">
        <thead>
        <th> Name </th>
        <th> Number </th>
        

      </thead>
      <tbody>
   
      
    <?php
    $q = "SELECT Distinct * from empc where EmpID='$pas'";
    $sq = mysqli_query($con,$q);
    
    
    
    
    while( $result2 = mysqli_fetch_array($sq) ){ 
        $nq = "SELECT USER_ID from owners where OwnerID='$result2[OwnerID]'";
        $jk = mysqli_query($con,$nq);
        while( $result1 = mysqli_fetch_array($jk) ){ 
            $np = "SELECT  * from user where `User_ID`='$result1[USER_ID]'";
            $af = mysqli_query($con,$np);
            $result = mysqli_fetch_array($af);
            echo "<tr> <td>".$result['Name']."</td><td>".$result['Number']."</td></tr>";
        }

        

       }
        
           
    
   

    mysqli_close($con);
    ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>