<?php 
session_start(); 
include "connection.php";

if (isset($_POST['Student_Number']) && isset($_POST['Password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Student_Number']);
	$pass = validate($_POST['Password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM students WHERE Student_Number='$uname' AND Password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Student_Number'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['Student_Number'] = $row['Student_Number'];
            	$_SESSION['Student_FName'] = $row['Student_FName'];
            	$_SESSION['Email'] = $row['Email'];
            	header("Location: student.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}