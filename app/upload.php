<?php
     session_start();
     if(!isset($_SESSION["Student_Number"])){
          header("location:login.php");
     }

include("db_conn.php");

     
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sidebar 03</title>
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
              <li>
                <a href="student.php"><span class="fa fa-user mr-3"></span> Student Profile</a>
              </li>
              <li>
                  <a href="register.php"><span class="fa fa-briefcase mr-3"></span> Register Modules</a>
              </li>
              <li class="active">
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
         <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header  text-center bg-primary text-white text-uppercase">
                            Upload Required Documents
                        </div>
                        <div class="card-body" >
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Student number:</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['Student_Number']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Passport:</label>
                                <input type="file" name="img1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Visa/Residence Permit:</label>
                                <input type="file" name="img2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Proof of Medical Insurance:</label>
                                <input type="file" name="img3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Proof of Vaccinations:</label>
                                <input type="file" name="img4" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>A15/A18 Document:</label>
                                <input type="file" name="img5" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Visa Application Receipt:</label>
                                <input type="file" name="img6" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Undertaking:</label>
                                <input type="file" name="img7" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary
                                    ">
                                </div>
                                
                            </form>
                        </div>
                    </div>
</div>
     <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
    include 'config.php';
    $name=$_POST['name'];
    $location="upload/";
    $date_uploaded=date("Y-m-d H:i:s");
    $file1=$_FILES['img1']['name'];
    $file_tmp1=$_FILES['img1']['tmp_name'];
    $file2=$_FILES['img2']['name'];
    $file_tmp2=$_FILES['img2']['tmp_name'];
    $file3=$_FILES['img3']['name'];
    $file_tmp3=$_FILES['img3']['tmp_name'];
    $file4=$_FILES['img4']['name'];
    $file_tmp4=$_FILES['img4']['tmp_name'];
    $file5=$_FILES['img5']['name'];
    $file_tmp5=$_FILES['img5']['tmp_name'];
    $file6=$_FILES['img6']['name'];
    $file_tmp6=$_FILES['img6']['tmp_name'];
    $file7=$_FILES['img7']['name'];
    $file_tmp7=$_FILES['img7']['tmp_name'];
    
    $query = "INSERT INTO documents(student_no,passport,visa_permit,medical_insurance,vaccination,a15_a18,visa_receipt,undertaking,date_uploaded) VALUES ('$name','$file1','$file2','$file3','$file4','$file5','$file6','$file7','$date_uploaded')";
    
    $fire=mysqli_query($conn,$query);
    if($fire)
    {
        move_uploaded_file($file_tmp1, $location.$file1);
        move_uploaded_file($file_tmp2, $location.$file2);
        move_uploaded_file($file_tmp3, $location.$file3);
        move_uploaded_file($file_tmp4, $location.$file4);
        move_uploaded_file($file_tmp5, $location.$file5);
        move_uploaded_file($file_tmp6, $location.$file6);
        move_uploaded_file($file_tmp7, $location.$file7);
        echo "success";
    }
    else
    {
        echo "failed";
    }
}

?>
