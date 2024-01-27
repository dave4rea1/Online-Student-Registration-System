<?php
     session_start();
     if(!isset($_SESSION["Student_Number"])){
          header("location:login.php");
     }

include("db_conn.php");

$Student_FName=$_SESSION["Student_FName"];

$sql= mysqli_connect($sname, $unmae, $password, $db_name);
$query = mysqli_query($sql, "SELECT * FROM students WHERE Student_FName = '$Student_FName'") or die(mysqli_error());

        
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
        
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar" class="active">
                <div class="custom-menu">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
                <div class="p-4">
                 <h1><a href="#" class="logo"><?php echo $_SESSION['Student_FName']; ?></a></h1>
           <ul class="list-unstyled components mb-5">
              <li class="active">
                <a href="student.php"><span class="fa fa-user mr-3"></span> Student Profile</a>
              </li>
              <li>
                  <a href="register.php"><span class="fa fa-briefcase mr-3"></span> Register Modules</a>
              </li>
              <li>
              <a href="upload.php"><span class="fa fa-upload mr-3"></span> Upload Documents</a>
              </li>
              <li>
              <a href="payment.php"><span class="fa fa-credit-card-alt mr-3"></span> Make Payments</a>
              </li>
              <br><br><br><br><br><br><br>
              <li>
              <a href="logout.php"><span class="fa fa-sign-out  mr-3"></span> Logout</a>
              </li>
            </ul>

            

            <div class="footer">
                <p>
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Developed by Phantoms.<i class="icon-heart" aria-hidden="true"></i> 
            </div>

          </div>
        </nav>
       
        

 <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        <!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="img/profile.png" alt="">
            <h3><?php echo $_SESSION['Student_FName']; ?></h3>
          </div>
          <?php while($row = mysqli_fetch_array($query))
    {?>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student Number:</strong><?php echo $_SESSION['Student_Number']; ?></p>
            <p class="mb-0"><strong class="pr-1">Student Name:</strong><?php echo $_SESSION['Student_FName']; ?></p>
            <p class="mb-0"><strong class="pr-1">Course Code:</strong><?php echo $row['7']?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-user mr-3"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Cell Number</th>
                <td width="2%">: <?php echo $row['3']?></td>
                
              </tr>
              <tr>
                <th width="30%">Email:  </th>
                <td width="2%">: <?php echo $row['4']?></td>
                
              </tr>
              <tr>
                <th width="30%">Nationality:</th>
                <td width="2%">: <?php echo $row['5']?></td>
                
              </tr>
              <tr>
                <th width="30%">Passport Num:</th>
                <td width="2%">: <?php echo $row['6']?></td>
                
              </tr>
              <tr>
                <th width="30%">Address:</th>
                <td width="2%">: <?php echo $row['8']?></td>
               
              </tr>
            </table>
          </div>
            <?php }
    ?>
        </div>
      </div>
    </div>
  </div>
</div>

      </div>
        </div>
 <a href="logout.php">Logout</a>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
    




