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
<style>
body  {
  background-image: url("Prop1.jpg");
  background-size: 1550px 1000px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 20px;
  box-sizing: border-box;
}
button {
  background-color: purple;
  color: yellow;
  padding: 13px 23px;
  margin: 7px 1px;
  border-radius: 20px;
  cursor: pointer;
  width: 100%;
}
.cancelbtn {
  width: auto;
  padding: 10px 25px;
  background-color: maroon;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}
.rounded-circle{
border-radius: 65px;}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
.modal {
  
  display: none;/* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-image: url("Prop1.jpg");
  background-repeat: no-repeat;
  background-size: 1550px 1000px;
  /*background-color: white;*/
  padding-top: 40px;
}

/* Modal Content/Box */
.modal-content {
  background-color: lightblue;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius: 20px;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
#hp  {
float: right;    
 margin: 0 0 0 15px;
}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
right {
  float: right;
}

</style>
</head>
<body>


<center><img src="Logo1.png" height="100" class="rounded-circle" alt="Cinque Terre" style="float:left"><br>

<div class="bg"></div>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
   
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <div class="right">
   
<a href="show.php"><img src="shopping-cart.png" width="50" height="60" id="hp" float:right/></a><br><br>
</div>
    </nav>
    
  </div>
</header>



<?php 
include('connect.php');
  session_start();
    
    $pas = $_SESSION['varname'];
    $fame = $_SESSION['varname1'];
    echo "<h1><center>".$fame."</h1>";
    ?>
    

  
  

<br><br>
<br><br>
<br>

<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;" ><center><b>BUY</button>

<div id="id04" class="modal">
  
  <form class="modal-content animate" action="prop12.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <h1>Property Search</h1><br>
      <label for="mnum"><b>City</b></label>
      <input type="text" placeholder="Enter City" name="mnum" required>
      <label for="state"><b>State:</b></label>
      <select name="state" id="state">
      <option value="0">Select State</option>
      <option value="1">Andaman and Nicobar Islands</option>
      <option value="2">Andhra Pradesh</option>
      <option value="3">Arunachal Pradesh</option>
      <option value="4">Assam</option>
      <option value="5">Bihar</option>
      <option value="6">Chandigarh</option>
      <option value="7">Chhattisgarh</option>
      <option value="8">Dadra And Nagar Haveli</option>
      <option value="9">Delhi</option>
      <option value="10">Diu and Daman</option>
      <option value="11">Goa</option>
      <option value="12">Gujarat</option>
      <option value="13">Haryana</option>
      <option value="14">Himachal Pradesh</option>
      <option value="15">Jammu and Kashmir</option>
      <option value="16">Jharkhand</option>
      <option value="17">Karnataka</option>
      <option value="18">Kerala</option>
      <option value="19">Ladakh</option>
      <option value="20">Lakshadweep</option>
      <option value="21">Madhya Pradesh</option>
      <option value="22">Maharashtra</option>
      <option value="23">Manipur</option>
      <option value="24">Meghalaya</option>
      <option value="25">Mizoram</option>
      <option value="26">Nagaland</option>
      <option value="27">Odisha</option>
      <option value="28">Puducherry</option>
      <option value="29">Punjab</option>
      <option value="30">Rajasthan</option>
      <option value="31">Sikkim</option>
      <option value="32">Tamil Nadu</option>
      <option value="33">Telangana</option>
      <option value="34">Tripura</option>
      <option value="35">Uttar Pradesh</option>
      <option value="36">Uttarakhand</option>
      <option value="37">West Bengal</option>
	</select><br>
     <label for="uname"><b>Price</b></label>
      <input type="text" placeholder="Enter Price" name="uname" required>
      <input type="radio" name="Sell" value="Sell">Buy
      <input type="radio" name="Sell" value="Rent">Rent<BR> 

      <label for="psw"><b>Type of property:</b></label>
      <select name="psw" id="psw">
      <option value="A">1BHK</option>
      <option value="B">2BHK</option>
      <option value="C">3BHK</option>
      <option value="D">4BHK</option>
      <option value="E">5BHK</option>
      <option value="F">Bungalow</option>
      <option value="G">Farmland</option>
	</select><br><br>
   

        
      
      
    </div>

    <div class="container" style="background-color:lightgreen">
      <button type="submit" style="width:auto;">Submit</button>
    
      <br>
      
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script><br><br>
<a href="abc1.html"><button style="width:auto;"  >Logout</button></a>&nbsp;
<div id="id03" class="modal">
  
  <form class="modal-content animate" action="prop.php" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <h1>Property Details</h1><br>
      <label for="fname"><b>Address</b></label>
      <input type="text" placeholder="Enter address" name="fname" required>
      <label for="mnum"><b>City</b></label>
      <input type="text" placeholder="Enter City" name="mnum" required>
      <label for="state"><b>State:</b></label>
      <select name="state" id="state">
      <option value="0">Select State</option>
      <option value="1">Andaman and Nicobar Islands</option>
      <option value="2">Andhra Pradesh</option>
      <option value="3">Arunachal Pradesh</option>
      <option value="4">Assam</option>
      <option value="5">Bihar</option>
      <option value="6">Chandigarh</option>
      <option value="7">Chhattisgarh</option>
      <option value="8">Dadra And Nagar Haveli</option>
      <option value="9">Delhi</option>
      <option value="10">Diu and Daman</option>
      <option value="11">Goa</option>
      <option value="12">Gujarat</option>
      <option value="13">Haryana</option>
      <option value="14">Himachal Pradesh</option>
      <option value="15">Jammu and Kashmir</option>
      <option value="16">Jharkhand</option>
      <option value="17">Karnataka</option>
      <option value="18">Kerala</option>
      <option value="19">Ladakh</option>
      <option value="20">Lakshadweep</option>
      <option value="21">Madhya Pradesh</option>
      <option value="22">Maharashtra</option>
      <option value="23">Manipur</option>
      <option value="24">Meghalaya</option>
      <option value="25">Mizoram</option>
      <option value="26">Nagaland</option>
      <option value="27">Odisha</option>
      <option value="28">Puducherry</option>
      <option value="29">Punjab</option>
      <option value="30">Rajasthan</option>
      <option value="31">Sikkim</option>
      <option value="32">Tamil Nadu</option>
      <option value="33">Telangana</option>
      <option value="34">Tripura</option>
      <option value="35">Uttar Pradesh</option>
      <option value="36">Uttarakhand</option>
      <option value="37">West Bengal</option>
	</select><br>
      <label for="uname"><b>Price</b></label>
      <input type="text" placeholder="Enter Price" name="uname" required>
      <input type="radio" name="Sell" value="Sell">Sell
      <input type="radio" name="Sell" value="Rent">Rent<BR>

      <label for="psw"><b>Type of property:</b></label>
      <select name="psw" id="psw">
      <option value="A">1BHK</option>
      <option value="B">2BHK</option>
      <option value="C">3BHK</option>
      <option value="D">4BHK</option>
      <option value="E">5BHK</option>
      <option value="F">Bungalow</option>
      <option value="G">Farmland</option>
	</select><br><br>
      <label for="file">Image</label>
      <input type="file" name="file" id="file" class="form-control" /><br>

        
      
      
    </div>

    <div class="container" style="background-color:lightgreen">
      <button type="submit" style="width:auto;">Submit</button>
      
      <br>
      <a href="new1.php">Click to see your uploaded property</a>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>