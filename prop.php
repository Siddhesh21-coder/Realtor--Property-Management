<?php      
    session_start();
    $pas = $_SESSION['varname'];
    $fame = $_SESSION['varname1'];
    $conn = mysqli_connect("localhost", "root", "", "target");
    $output_dir = "E:\XAMPP\htdocs\target";/* Path for file upload */
    $fname = $_REQUEST['fname'];
		$mnum = $_REQUEST['mnum'];
		$uname = $_REQUEST['uname'];
		$state = $_REQUEST['state'];
        $uname = $_REQUEST['uname'];
        $Sell = $_REQUEST['Sell'];
        $psw = $_REQUEST['psw'];
        $files = $_FILES['file'];
        $filename = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];
        $city = strtolower($mnum);
        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));
        $fileextensionstored = array('png','jpg','jpeg');
        
            $destinationfile = 'target/'.$filename;
            move_uploaded_file($filetmp,$destinationfile);
        $fil=$filename;
        echo "<h1>.$fil.</h1>";
		$_SESSION['varname2']=$fil;
		
		
		$sql = "INSERT INTO property VALUES ('$fname',
			'$city','$state','$uname','$Sell','$psw',NULL,'$destinationfile',$pas)";
        //$sqli = "INSERT INTO owner VALUES "
            
		
		if(mysqli_query($conn, $sql)){
            echo "<a href='New1.php'> Click Here</a> To see your uploaded property";
          
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
    
          
       