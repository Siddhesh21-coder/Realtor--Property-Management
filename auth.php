<?php      
    session_start();
    include('connect.php');  
    $uname = $_POST['uname'];  
    $psw = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $uname = stripcslashes($uname);  
        $psw = stripcslashes($psw);  
        $uname = mysqli_real_escape_string($con, $uname);  
        $psw = mysqli_real_escape_string($con, $psw);  
        $md = md5($psw);
		$sh = sha1($md);
		$cr = crypt($sh,'$6$rounds=5000$anexamplestringforsalt$');      
        $sql = "select *from user where Username = '$uname' and Password = '$cr'";  
        $num = "select USER_ID from user where Username = '$uname' and Password = '$cr' ";
        $nam = "select Name from user where Username = '$uname' and Password = '$cr' ";
        $result = mysqli_query($con, $sql);
        $result1 = mysqli_query($con, $num);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        $result2 = mysqli_query($con, $nam);
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
       
        
    
          
        if($count == 1){  
            //echo "<h1><center> You Have Successfully Login </center></h1>";
            $pas = $row1['USER_ID'];
            $fame = $row2['Name'];
            $_SESSION['varname'] = $pas;
            $_SESSION['varname1'] = $fame;

            

          
         echo '<meta http-equiv="refresh" content="1; URL=BAC.php" />';


//echo "<br><a href='demo.php'><b><h1>SELL</h1></b></a>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  