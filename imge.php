<?php      
    session_start();
    $prpid = $_SESSION['varname10'] ;
        //$pas = $_SESSION['varname'];
    $conn = mysqli_connect("localhost", "root", "", "target");
    $output_dir = "E:\XAMPP\htdocs\target";/* Path for file upload */
        $files = $_FILES['file'];
        $chck = $_REQUEST['chck'];
        $filename = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];
        //print_r($fname);
        //print_r($filename);
        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));
        $fileextensionstored = array('png','jpg','jpeg','jiff');
        
            $destinationfile = 'target/'.$filename;
            move_uploaded_file($filetmp,$destinationfile);
        
        //$image = $_REQUEST['image']
        $fil=$filename;
        echo "<h1>.$fil.</h1>";
		$_SESSION['varname2']=$fil;
		
		//$qry = "SELECT ID from property where "
		$sql = "INSERT INTO images VALUES ('$destinationfile','$output_dir','$prpid',NULL)";
        //$sqli = "INSERT INTO owner VALUES "
            
		
		if(mysqli_query($conn, $sql)){
            if($chck)
            {
            echo '<meta http-equiv="refresh" content="1; URL=imga.html" />';}
            else{
                echo '<meta http-equiv="refresh" content="1; URL=BAC1.php" />';
            }
          
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
    
          
       