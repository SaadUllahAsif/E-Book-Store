<?php
  require("connect.php");
  session_start();
  $date=date('y-m-d');
  $idoflogin=$_SESSION['id'];
  $nameoflogin=$_SESSION['firstname'];
  $password=$_SESSION['password'];
  $query="SELECT `id` FROM `customer` WHERE `id`='$idoflogin'";
  $result=mysqli_query($con,$query);
  while($row = $result->fetch_assoc())
  {
    $session=$row["id"];

    
    
                          $query="SELECT `orderstatus` FROM `orders` WHERE `customerid`='$session' AND `date`='$date'";
                          
                          $result=mysqli_query($con,$query);
                          while($row = $result->fetch_assoc())
                          {
                              $data=$row["orderstatus"];
                              
                            }              
  }
  if(isset($_POST["updateaccount"])){     
    $updatefirstname=$_POST["firstname"];
    $updatelastname=$_POST["lastname"];
    $updatemobilenumber=$_POST["mobilenumber"];
    $updateemail=$_POST["email"];
    $updatemethod=$_POST["method"];

    $query="UPDATE `customer` SET `firstname`='$updatefirstname',`lastname`='$updatelastname',`email`='$updateemail',
                `mobilenumber`='$updatemobilenumber',`method`='$updatemethod' WHERE `id` = '$idoflogin' "; 
    $data=mysqli_query($con,$query);
    if($data){
        echo '<script>alert("Account Details Updated Successfully.")</script>';
    } else {
        echo '<script>alert("Unable To Update Account Details.")</script>';
    }
  }
     
  if(isset($_POST["changepassword"])){
      $currentpassword=$_POST["currentpassword"];
      $newpassword=$_POST["newpassword"];
      $confirmnewpassword=$_POST["confirmnewpassword"];
      if($currentpassword == $password ){
          if($newpassword == $confirmnewpassword ){

            $query="UPDATE `customer` SET `password`='$newpassword',`confirmpassword`='$confirmnewpassword' WHERE `id` = '$idoflogin'";
            $data=mysqli_query($con,$query);
            if($data){
                echo '<script>alert("Password Updated Successfully")</script>';
            } else {
                echo '<script>alert("Unable To Update Password.")</script>';
            }
        } else {
            echo '<script>alert("New Password Doesnot Match To Confirm Password.")</script>';
        }
    } else {
        echo '<script>alert("Current Password Doesnot Match.")</script>';
    }
  }
  if(isset($_POST["changeaddress"])){
      $changeaddress=$_POST["address"];

      $query="UPDATE `customer` SET `address`='$changeaddress' WHERE `id` = '$idoflogin'";
      $data=mysqli_query($con,$query);
      if($data){
        echo '<script>alert("Address Successfully Updated.")</script>';
      } else {
        echo '<script>alert("Unable to Update Address.")</script>';
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store User Account</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
       
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto">
                        <div class="col-lg-6 col-md-3">
                        
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="nav-item nav-link fab fa-twitter"></i></a>
                                    <a href=""><i class="nav-item nav-link fab fa-facebook-f"></i></a>
                                    <a href=""><i class="nav-item nav-link fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="nav-item nav-link fab fa-instagram"></i></a>
                                    <a href=""><i class="nav-item nav-link fab fa-youtube"></i></a>
                                </div>
                            </div>
                        
                    </div>
                    <a href="http://localhost/ebook/faqs.php"class="nav-item nav-link">FAQ'S</a>
                        <a href="http://localhost/ebook/contactus.php"class="nav-item nav-link">Contact</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="http://localhost/ebook/login.php" class="dropdown-item">Login</a>
                                    <a href="http://localhost/ebook/login.php" class="dropdown-item">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="http://localhost/ebook/hello.php">
                                <img src="images/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1">  
                            <div class="navbar-nav mr-auto">
                                <a class="nav-link" href="http://localhost/ebook/listhorror.php">HORROR</a>
                            </div> 
                    </div> 
                    <div class="col-md-1">
                            <div class="navbar-nav mr-auto">
                             <a class="nav-link" href="http://localhost/ebook/listclassic.php">CLASSICS</a>
                            </div>
                    </div>  
                    <div class="col-md-1">
                       <div class="navbar-nav mr-auto">
                        <a class="nav-link" href="http://localhost/ebook/listfantacy.php">FANTACY</a>
                       </div>
                    </div>  
                    <div class="col-md-2">
                            <div class="navbar-nav mr-auto">
                                <a class="nav-link" href="http://localhost/ebook/listhistoric.php">HISTORICAL FICTION</a>
                            </div>  
                    </div>  
                  
                    <div class="col-md-2">
                            <div class="navbar-nav mr-auto">
                             <a class="nav-link" href="http://localhost/ebook/listaction.php">ACTION & ADVENTURE</a>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                            <span>$</span>
                                <i class="fa fa-heart"></i>
                               
                            </a>
                            <a href="http://localhost/ebook/cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                            <a class="nav-link" href="http://localhost/ebook/hello.php"><i class="fas fa-book"></i>Buy Books</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Order Status</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Payment Method</a>
                            <!-- <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>address</a> -->
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                            <a class="nav-link" href="http://localhost/ebook/logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a> 
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>Dashboard</h4>
                                <div class="col-lg-4">
                        <div class="contact-form">
                        <?php
                                if(isset($_POST['submit'])){

                                    $feedback=$_POST['feedback'];

                                    $query="INSERT INTO `feedback`(`customerid`, `customername`, `feedback`) VALUES ('$idoflogin','$nameoflogin','$feedback')";
                                    $data=mysqli_query($con,$query);
                                    if($data){
                                        echo "entered";
                                    }
                                    else{
                                        echo "Not Entered";
                                    }
                                    }
                                ?>
                            <form action="" method="post">
                                <div class="row">
                                </div>
                                
                                <div class="form-group">

                                    <textarea class="form-control" rows="5" name="feedback" placeholder="Reviews/Feedback"></textarea>
                                </div>
                                <div><button class="btn" name="submit" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                            </div>
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="feature">
                                    <div class="container-fluid">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-md-6 feature-col">
                                                <div class="feature-content">
                                                    <i class="fa fa-check"></i>
                                                    <h2><?php if($data == "appeoved"){ echo "Approved";} else{echo "Pending...";}  ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 feature-col">
                                                <div class="feature-content">
                                                    <i class="fa fa-truck"></i>
                                                    <h2><?php if($data == "delivered"){ echo "Delivered";} else{echo "Pending...";}  ?></h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 feature-col">
                                                <div class="feature-content">
                                                <i class="fas fa-exclamation"></i>
                                                    <h2><?php if($data == "canceled"){ echo "Canceled";} else{echo "Pending...";}  ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Payment Method</h4>
                                <p>
                                1. Easy Paisa.
                          </p> 
                          <p>
                                2. Cash On Delivery. 
                          </p>           
                                
                            </div>
                            
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                            <form action="" method="post">
                                <h4>Account Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="firstname" placeholder="First Name">
                                    </div> 
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="lastname" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="mobilenumber" placeholder="Mobile Number">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="email" placeholder="Email address">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="method"  placeholder="Payment Method i.e easypasa/Cash On Delivery.">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn" name="updateaccount">Update Account</button>
                                        <br><br>
                                    </div>
                                </div>
                                </form>
                                <form action="" method="post">
                                <h4>Password change</h4>
                                <div class="row">
                                    <div class="col-md-12"> 
                                        <input class="form-control" type="password" name="currentpassword" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password" name="newpassword" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password" name="confirmnewpassword" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn" name="changepassword">Save Changes</button>
                                        <br><br>
                                    </div>
                                </div>
                                </form>
                                <form action="" method="post">
                                <h4>Address change</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="address" placeholder="Change Posting Address">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn" name="changeaddress">Change Address</button>
                                        
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->     
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
