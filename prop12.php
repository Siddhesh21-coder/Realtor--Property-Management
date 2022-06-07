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
    //$fil = $_SESSION['varname2'];
    $mnum = $_REQUEST['mnum'];
    $state = $_REQUEST['state'];
    $uname = $_REQUEST['uname'];
    $Sell = $_REQUEST['Sell'];
    $psw = $_REQUEST['psw'];

    $displayq = "select * from property where City='$mnum' AND Property_type='$psw' AND Action='$Sell' ORDER BY Price";
    $query = mysqli_query($con,$displayq);
    $row = mysqli_num_rows($query);
    if($row>=1)
    {
        ?>
   
<body>
  <br>
  <div class="container">
    <h1 class="text-center text-white bg-dark">Listed Properties Based on Your Search</h1>
    <br>
    <div class="table-responsive ">
      <table class="table table-bordered table-striped table-hover">
        <thead>
        <th> Address </th>
        <th> City </th>
        <th> Price </th>
        <th> Type </th>
        <th> Image </th>
        <th> Mobile </th>
        <th> Add to wishlist</th>
      </thead>
      <tbody>
    <?php
    while( $result = mysqli_fetch_array($query) ){ 
        if($result['Property_type']=='A')
        {
          $qr = "select Number from user where USER_ID='$result[User_ID]'";
          $qr1 = mysqli_query($con,$qr);
          $r1 = mysqli_fetch_array($qr1);
         echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 1BHK </td><td><a href='img.php'><img src=".$result['image']." height='100px' width='250px'></a> </td><td>".$r1['0']."</td><td><a href='wish.php'>Add to wishlist</a></td></tr>";
        $prp = $result['ID'];
        $_SESSION['varname18'] = $prp; }
        if($result['Property_type']=='B')
         {
          $qr = "select Number from user where USER_ID='$result[User_ID]'";
          $qr1 = mysqli_query($con,$qr);
          $r1 = mysqli_fetch_array($qr1);
          echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 2BHK </td><td><a href='img.php'><img src=".$result['image']." height='100px' width='250px'></a></td><td>".$r1['0']."</td><td><a href='wish.php'>Add to wishlist</a></td></tr>";
        $prp = $result['ID'];
        $_SESSION['varname18'] = $prp; }
        if($result['Property_type']=='C')
          {
            $qr = "select Number from user where USER_ID='$result[User_ID]'";
          $qr1 = mysqli_query($con,$qr);
          $r1 = mysqli_fetch_array($qr1);
           echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 3BHK </td><td> <a href='img.php'><img src=".$result['image']." height='100px' width='250px'></a></td><td>".$r1['0']."</td><td><a href='wish.php'>Add to wishlist</a></td></tr>";
          $prp = $result['ID'];
          $_SESSION['varname18'] = $prp; }
        if($result['Property_type']=='D')
           {
            $qr = "select Number from user where USER_ID='$result[User_ID]'";
            $qr1 = mysqli_query($con,$qr);
            $r1 = mysqli_fetch_array($qr1);
            echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 4BHK </td><td> <a href='img.php'><img src=".$result['image']." height='100px' width='250px'></a></td><td>".$r1['0']."</td><td><a href='wish.php'>Add to wishlist</a></td></tr>";
          $prp = $result['ID'];
          $_SESSION['varname18'] = $prp; }
        if($result['Property_type']=='E')
            {
              $qr = "select Number from user where USER_ID='$result[User_ID]'";
          $qr1 = mysqli_query($con,$qr);
          $r1 = mysqli_fetch_array($qr1);
             echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> 5BHK </td><td><a href='img.php'><img src=".$result['image']." height='100px' width='250px'></a></td><td>".$r1['0']."</td><td><a href='wish.php'>Add to wishlist</a></td></tr>";
            $prp = $result['ID'];
            $_SESSION['varname18'] = $prp; }
        if($result['Property_type']=='F')
             {
              $qr = "select Number from user where USER_ID='$result[User_ID]'";
              $qr1 = mysqli_query($con,$qr);
              $r1 = mysqli_fetch_array($qr1);
              echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> Bungalow </td><td> <a href='img.php'><img src=".$result['image']." height='100px' width='250px'></a></td><td>".$r1['0']."</td><td><a href='wish.php'>Add to wishlist</a></td></td></tr";
            $prp = $result['ID'];
            $_SESSION['varname18'] = $prp; }
              if($result['Property_type']=='G')
              {
                $qr = "select Number from user where USER_ID='$result[User_ID]'";
          $qr1 = mysqli_query($con,$qr);
          $r1 = mysqli_fetch_array($qr1);
               echo "<tr><td>".$result['Address']."</td><td>".$result['City']."</td><td>".$result['Price']."</td><td> FarmLand </td><td> <a href='img.php'><img src=".$result['image']." height='100px' width='250px'></a></td><td>".$r1['0']."</td><td><a href='wish.php'>Add to wishlist</a></td></td></tr>";
              $prp = $result['ID'];
              $_SESSION['varname18'] = $prp; }
              } 
           
    }
    else{
        echo "Search results did not match with our Database";
        echo "<a href='BAC.php'> Click Here</a> To go back to Home page";
    }
    mysqli_close($con);
    ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>