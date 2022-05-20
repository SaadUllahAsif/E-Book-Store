<?php 
    require("connect.php");
    session_start();
   
    if(isset($_POST["remove"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["cart"] as $keys => $value){
                
                
                if($value["product_id"] == $_GET["id"]){
                   unset($_SESSION["cart"][$keys]);
                   
                }
            }
        }
    }
    
    if(isset($_POST["bill"])){
        $userid=$_SESSION['id'];
        $username=$_SESSION['firstname'];
       

        if($userid == NULL){
            echo '<script> alert("login to order") </sprit>';
        }
        else{
            
            $date=date('y-m-d');
        foreach($_SESSION["cart"] as $keys => $value){

        
        
        $bookname= $value["item_name"];
        $price= $value["product_price"];

        $query="INSERT INTO `orders`(`customerid`, `customername`, `date`, `bookname`, `price`) VALUES 
        ('$userid','$username','$date','$bookname','$price')";

        $data=mysqli_query($con,$query);
        if($data)
        {echo "Data Base Updated For Orders";}
        else{echo "Error in Update data base for orders";}
        }
        }
        header("location:myaccount.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Book Cart</title>
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
                            <span>$<?php echo "12"; ?></span>
                                <i class="fa fa-heart"></i>
                               
                            </a>
                            <a href="http://localhost/ebook/cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span><?php echo "12" ; ?></span>
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
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                      
                                        <?php
                                    if(!empty($_SESSION["cart"])){
                                        $total=0;
                                        foreach ($_SESSION["cart"] as $key => $value){
                                            $total= $total + $value["product_price"];
                                            ?>
                                            <tr>
                                                <td> <?php echo $value["item_name"]; ?> </td>
                                                <td> $ <?php echo $value["product_price"]; ?> </td>
                                                <td>  $ <?php echo $total ?> </td>
                                                <form method="post" action="cart copy.php?action=delete&id=<?php echo $value["product_id"]; ?>">
                                                <!-- <td> <a href="cart copy.php?action=delete&id=<?php echo $value["product_id"]; ?>"> <span name="remove" class="fa fa-trash"> </span> </td> -->
                                                <td><button type="submit" name="remove"><i class="fa fa-trash"></i></button></td><br>
                                                </form>
                                            </tr>
                                          
                                            <?php
                                        }
                                    }
                                ?>
                                            
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                <?php
                                    $final = $total + 2;
                                ?>
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total<span>$ <?php echo $total; ?></span></p>
                                            <p>Shipping Cost<span>$2</span></p>
                                            <h2>Grand Total<span>$<?php echo $final; ?></span></h2>
                                        </div>
                                        <div class="cart-btn" >
                                            <form method="post" action="">
                                            <button type="submit" name="bill" > Checkout</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
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
