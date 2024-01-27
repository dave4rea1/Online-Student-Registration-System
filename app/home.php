<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Page</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/log.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/Place.png);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="https://www.nwu.ac.za/sites/www.nwu.ac.za/files/NWU-Logo-SW.png" alt="logo" width="200px">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <h3 class="text-white lead">Phantoms</h3>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
              Start Your<br>
              Academic Journey
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                The NWU is committed to functioning as a unitary, integrated, multi-campus university that enables equity, <br>redress and globally competitive teaching and research across all three of our campuses.
            </p>
            <a href="login.php" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Login</a>

        </div>
    </div>

    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">NWU paving the way</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/undergrad.jpg" alt="undergrad-student" class="mx-auto">
                <h4>Undergraduate studies</h4>
                <p>Your journey of discovery starts here.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/postgrad.jpg" alt="postgrad-student" class="mx-auto">
                <h4>Postgraduate studies</h4>
                <p>We believe in leaders that guide with fortitude and through example.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="img/distance.jpg" alt="a student" class="mx-auto">
                <h4>Distance learnig</h4>
                <p>Your journeys never end, only the paths that you take.</p>
            </div>
        </div>
    </div>

    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        We would love to hear from you,
                        <br> don't hesitate to contact us.
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : phantoms2022@gmail.com</li>
                        <li>Phone : 089-475-2134</li>
                        <li>Address : 482 University Drive, Mmabatho, North-West</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label for="name">Your Name</label>
                              <input type="name" class="form-control" id="name">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="Email">Your Email</label>
                              <input type="email" class="form-control" id="Email">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="message">Message</label>
                          <textarea class="form-control" id="message" rows="3"></textarea>
                      </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <!-- copyright -->
  <div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
              <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2022 Developed by Phantoms.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                      <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>




