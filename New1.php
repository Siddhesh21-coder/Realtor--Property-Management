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
  session_start();
    
    $pas = $_SESSION['varname'];
    $fame = $_SESSION['varname1'];
    echo "<h1><center>".$fame."</h1>";
    $displayq = "select * from property where User_ID='$pas'";
    $query = mysqli_query($con,$displayq);
    $row = mysqli_num_rows($query);
    
    if($row>=1)
    {
        ?>
    <body>
  <div class="container">
  
    <h1 class="text-center bg-dark text-white">Listed Properties</h1>
    <h1> Click on image to upload more images</h1>
    <br>
    <div class="table-responsive "><br>
      <table class="table table-hover table-striped table-bordered text-center">
      <thead class="bg-dark text-white">
      <th> Address </th>
        <th> City </th>
        <th> Price </th>
        <th> Type </th>
        <th> Image </th>
</thead>

        <tbody>
    <?php
    while( $result = mysqli_fetch_array($query) ){ 
      if($result['Property_type']=='A')
        {
         echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 1BHK </td><td><a href='imgup.html'><img src=".$result['image']." height='100px' width='250px'></a> </td></tr>";
        $prpid = $result['ID'];
         $_SESSION['varname10'] = $prpid;
        }
        if($result['Property_type']=='B')
         {
          echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 2BHK </td><td><a href='imgup.html'><img src=".$result['image']." height='100px' width='250px'></a></td></tr>";
        $prpid = $result['ID'];
          $_SESSION['varname10'] = $prpid;
        }
        if($result['Property_type']=='C')
          {
           echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 3BHK </td><td> <a href='imgup.html'><img src=".$result['image']." height='100px' width='250px'></a></td></tr>";
          $prpid = $result['ID'];
           $_SESSION['varname10'] = $prpid;
          }
        if($result['Property_type']=='D')
           {
            echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 4BHK </td><td> <a href='imgup.html'><img src=".$result['image']." height='100px' width='250px'></a></td></tr>";
          $prpid = $result['ID'];
            $_SESSION['varname10'] = $prpid;
          }
        if($result['Property_type']=='E')
            {
             echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 5BHK </td><td><a href='imgup.html'><img src=".$result['image']." height='100px' width='250px'></a></td></tr>";
            $prpid = $result['ID'];
             $_SESSION['varname10'] = $prpid;
            }
        if($result['Property_type']=='F')
             {
              echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> Bungalow </td><td> <a href='imgup.html'><img src=".$result['image']." height='100px' width='250px'></a></td></tr";
            $prpid = $result['ID'];
              $_SESSION['varname10'] = $prpid;
            }
              if($result['Property_type']=='G')
              {
               echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> FarmLand </td><td> <a href='imgup.html'><img src=".$result['image']." height='100px' width='250px'></a></td></tr>";
              $prpid = $result['ID'];
               $_SESSION['varname10'] = $prpid;
              }
              }} 
    else{
        echo "You Have Not Entered Any property";
        echo "<a href='BAC1.php'> Click Here</a> To go back to Home page";
    }
    mysqli_close($con);
    ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>
