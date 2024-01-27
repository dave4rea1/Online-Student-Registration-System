<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="style.css">
	<style>
		/* Footer */
  	.footer {
   		position: fixed;
   		left: 0;
   		bottom: 0;
   		width: 100%;
   		background-color: rgba(104, 85, 224, 1);
   		color: white;
   		text-align: center;
   		padding-top: 20px;
   		padding-bottom: 20px;
	}
	</style>
</head>
<body>


	<!------------MAIN------------------>
     <form action="function.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Student Number</label>
     	<input type="text" name="Student_Number" placeholder="Enter your student number"><br>

     	<label>Password</label>
     	<input type="password" name="Password" placeholder="Enter your password"><br>

     	<button type="submit">Login</button>
     </form>
     <!--------------MAINEND------------->

     <!--------------FOOTER------------->
     <div class="footer">
  		<a href="home.php">HOME</a>
  	</div>
     <!--------------FOOTEREND------------->

</body>
</html>