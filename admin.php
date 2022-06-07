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
 
include('connect.php');
  
  
 
  ?>
  <body>
  <br>
  <div class="container">
    <h1 class="text-center text-white bg-dark">Transfer Request</h1>
    <br>
    <div class="table-responsive ">
      <table class="table table-bordered table-striped table-hover">
        <thead>
        <th> Address </th>
        <th> City </th>
        <th> Type </th>
        <th> Assign</th>
        <th> Action</th>
      </thead>
      <tbody>
   
      
    <?php
    $q = "SELECT * from manageprop";
    $sq = mysqli_query($con,$q);
    
    
    while( $result = mysqli_fetch_array($sq) ){ 

        if($result['Type']=='Electricity'){
         echo "<tr> <form method='post' action='rem1.php'><td>".$result['Address']."</td><input type='hidden' name='reg_id1' value=". $result['Owner_ID']."><input type='hidden' name='city' value=". $result['City']."><input type='hidden' name='reg_id' value=". $result['Type']."><td>".$result['City']."</td><td>".$result['Type']."</td><td><input type='text' id='fname' name='fname'></td><td><input type='submit' name='delete' class='btn' value='assign'></td></form></tr>";
        }
        if($result['Type']=='Plumbing'){
            echo "<tr> <form method='post' action='rem1.php'><td>".$result['Address']."</td><input type='hidden' name='reg_id1' value=". $result['Owner_ID']."><input type='hidden' name='city' value=". $result['City']."><input type='hidden' name='reg_id' value=". $result['Type']."><td>".$result['City']."</td><td>".$result['Type']."</td><td><input type='text' id='fname' name='fname'></td><td><input type='submit' name='delete' class='btn' value='assign'></td></form></tr>";
           }
           if($result['Type']=='Painting'){
            echo "<tr> <form method='post' action='rem1.php'><td>".$result['Address']."</td><input type='hidden' name='reg_id1' value=". $result['Owner_ID']."><input type='hidden' name='city' value=". $result['City']."><input type='hidden' name='reg_id' value=". $result['Type']."><td>".$result['City']."</td><td>".$result['Type']."</td><td><input type='text' id='fname' name='fname'></td><td><input type='submit' name='delete' class='btn' value='assign'></td></form></tr>";
           }
           if($result['Type']=='Cleaning'){
            echo "<tr> <form method='post' action='rem1.php'><td>".$result['Address']."</td><input type='hidden' name='reg_id1' value=". $result['Owner_ID']."><input type='hidden' name='city' value=". $result['City']."><input type='hidden' name='reg_id' value=". $result['Type']."><td>".$result['City']."</td><td>".$result['Type']."</td><td><input type='text' id='fname' name='fname'></td><td><input type='submit' name='delete' class='btn' value='assign'></td></form></tr>";
           }}
        
           
    
   

    mysqli_close($con);
    ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>