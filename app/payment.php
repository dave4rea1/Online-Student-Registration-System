<?php
     session_start();
     if(!isset($_SESSION["Student_Number"])){
          header("location:login.php");
     }

require_once 'config.php';
include("db_conn.php");

     
?>
<!DOCTYPE html>
<html>
<head>
     <title>Student</title>
     <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     
<!doctype html>
<html lang="en">
  <head>
    <title>Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Stylesheet file -->
            <link rel="stylesheet" href="css/stylepay.css">
    
        <!-- Stripe JS library -->
            <script src="https://js.stripe.com/v3/"></script>

        <!-- Custom script to process checkout with Stripe API -->
            <script src="js/checkout.js" STRIPE_PUBLISHABLE_KEY="<?php echo STRIPE_PUBLISHABLE_KEY; ?>" defer></script>
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
              <li>
              <a href="upload.php"><span class="fa fa-upload mr-3"></span>  Upload Documents</a>
              </li>
              <li class="active">
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
        <div class="container">
   
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Charge <?php echo 'R'.$itemPrice; ?> with Stripe</h3>
            
            <!-- Product Info -->
            <p><b>Payment Name:</b> <?php echo $itemName; ?></p>
            <p><b>Price:</b> <?php echo 'R'.$itemPrice.' '.$currency; ?></p>
        </div>
        <div class="panel-body">
            <!-- Display status message -->
            <div id="paymentResponse" class="hidden"></div>
            
            <!-- Display a payment form -->
            <form id="paymentFrm" class="hidden">
                <div class="form-group">
                    <label>NAME</label>
                    <input type="text" id="name" class="field" placeholder="Enter name" required="" autofocus="">
                </div>
                <div class="form-group">
                    <label>EMAIL</label>
                    <input type="email" id="email" class="field" placeholder="Enter email" required="">
                </div>
                
                <div id="paymentElement">
                    <!--Stripe.js injects the Payment Element-->
                </div>
                
                <!-- Form submit button -->
                <button id="submitBtn" class="btn btn-success">
                    <div class="spinner hidden" id="spinner"></div>
                    <span id="buttonText">Pay Now</span>
                </button>
            </form>
            
            <!-- Display processing notification -->
            <div id="frmProcess" class="hidden">
                <span class="ring"></span> Processing...
            </div>
            
            <!-- Display re-initiate button -->
            <div id="payReinit" class="hidden">
                <button class="btn btn-primary" onClick="window.location.href=window.location.href.split('?')[0]"><i class="rload"></i>Re-initiate Payment</button>
            </div>
        </div>
    </div>
</div>
      </div>

 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>