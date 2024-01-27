<?php
     session_start();
     if(!isset($_SESSION["Student_Number"])){
          header("location:login.php");
     }

    $database_name = "final";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                    'product_description' => $_POST["hidden_description"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="register.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="register.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
                'product_description' => $_POST["hidden_description"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="register.php"</script>';
                }
            }
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
       
        .container_2 {
            
            padding: 1px;
            display: flex;
            margin: 1em;
            
        }
        .item {
            padding: 10px;
            width: 500px;
            background-color: rgba(95,154,250,.5);
            
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: black;
            background-color: #efefef;
            padding: 1%;
        }
        h2{
            text-align: center;
            color: black;
            background-color: #efefef;
            padding: 1%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
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
              <li class="active">
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

      <div id="content" >
        <div class="container">
        <h2>Modules</h2>
        <div class="container_2" style="width: 100%">
                                <div class="item">Name</div>
                                <div class="item">Description</div>
                                <div class="item">Credits</div>
                                <div class="item">Semester</div>
                                <div class="item">Price</div>
                                <div class="item"> </div>
                                <div class="item">Action</div>

                            </div>

        <?php
            $query = "SELECT * FROM modules ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    

                        <form method="post" action="register.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="container_2" style="width: 100%">
                                <div class="item"><?php echo $row["pname"]; ?></div>
                                <div class="item"><?php echo $row["description"]; ?></div>
                                <div class="item"><?php echo $row["credits"]; ?></div>
                                <div class="item"><?php echo $row["period"]; ?></div>
                                <div class="item">R<?php echo $row["price"]; ?></div>
                                <div class="item"><input  type="text" name="quantity" class="form-control" style="visibility: hidden;" value="1" size="2"></div>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_description" value="<?php echo $row["description"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <div class="item"><input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add Module"></div>

                            </div>
                        </form>
                    
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Selected Modules</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Module Name</th>
                <th width="30%">Module Description</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <form action="upload.php" method="post">
            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["product_description"]; ?></td>
                            <td>R <?php echo $value["product_price"]; ?></td>
                            <td>
                                R <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="register.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Module</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right" name="total">R <?php echo number_format($total, 2); ?></th>
                            <?php
                                $_SESSION['total']=$total;
                            ?>
                            <td><input type="submit" value="Next" name="total"/></td>
                        </tr>
                        <?php
                    }
                ?>
            </form>
            </table>
        </div>

    </div>

      </div>
        </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script></script>
  </body>
</html>

