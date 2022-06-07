<?php
	  session_start();
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
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
		$md = md5($psw);
		$sh = sha1($md);
		$cr = crypt($sh,'$6$rounds=5000$anexamplestringforsalt$');
		//echo $cr;
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user VALUES ('$fname',
			'$mnum','$uname','$cr',NULL)";

         $user1 = $uname;
		 $pass1 = $cr;
		 $_SESSION['varname6'] = $user1;
		 $_SESSION['varname7'] = $pass1;   
		
		
		if(mysqli_query($conn, $sql)){

			echo '<meta http-equiv="refresh" content="1; URL=demo4.php" />';

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
	