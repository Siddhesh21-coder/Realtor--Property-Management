<?php

		
		$conn = mysqli_connect("localhost", "root", "", "target");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fname = $_REQUEST['fname'];
		$mnum = $_REQUEST['mnum'];
		$uname = $_REQUEST['uname'];
		$psw = $_REQUEST['psw'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('$fname',
			'$mnum','$uname','$psw',NULL)";
            
        
		
		if (mysqli_query($conn, $sql)){ 
            
			echo '<meta http-equiv="refresh" content="1; URL=DBMSF.html" />';
			//echo nl2br("\n$fname\n $mnum\n "
			//	. "$uname\n $psw");
			//echo "<br><center><a href='DBMSF.html'><b><h1>LOGIN</h1></b></a></center>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	