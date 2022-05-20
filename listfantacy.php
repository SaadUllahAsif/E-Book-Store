<?php
    require("connect.php");
    session_start();

    if(isset($_POST["add"])){
        if(isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"], $column= "product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script> window.location="listfantacy.php" </script>';
            }else{
                echo '<script>alert("product Added")</script>';
                echo '<script> window.location="listfantacy.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    } 
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Books Fantacy</title>
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
                    <div class="col-md-3">
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
                         
                            <a href="http://localhost/ebook/cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span></span>
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
                    <li class="breadcrumb-item active">Fantacy</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                       
                        <?php

$query=" SELECT * FROM `book` WHERE `category` = 'Fantacy' ";

$data= mysqli_query($con,$query);


$result= mysqli_num_rows($data);

if($result > 0)
    {
    while($row = mysqli_fetch_array($data))
    {
    
   
?>

    <div class="col-md-4">
        <div class="product-item">
        <form method="post" action="listfantacy.php?action=add&id=<?php echo $row["id"] ?>">
            <div class="product-title">
                <a href="#"><?php echo $row["name"]; ?> by <?php echo $row["author"]; ?></a>
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?> ">
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="product-image">
                <a href="product-detail.html">
                    <img src="imag/<?php echo $row["image"]; ?>" alt="Product Image">
                </a>
            </div>
    
            <div class="product-price">
                <h3><span>$</span><?php echo $row["price"]; ?></h3>
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?> ">
                <button  class="btn" type="submit"  name="add"><i class="fa fa-shopping-cart"></i>Buy Now</button>
                <!-- <input class="btn" type="submit" <i class="fa fa-shopping-cart"></i> name="add" value="Buy Now"> -->
                <!-- <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a> -->
                
            </div>
            </form>
        </div>
    </div>

<?php
        }
    }
?>

                          
                        
                           
                        </div>
                        
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
                            <h2 class="title">Category</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/ebook/listhorror.php"><i class="fa fa-book"></i>Horror</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/ebook/listclassic.php"><i class="fa fa-book"></i>Classic</a>
                                    </li>
                                    <li class="nav-item">   
                                        <a class="nav-link" href="http://localhost/ebook/listhistoric.php"><i class="fa fa-book"></i>Historical Fantacy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/ebook/listaction.php"><i class="fa fa-book"></i>Action & Adventure</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <div class="product-item">
                                    <div class="product-title"> 
                                        <a href="#">Devil's Cup </a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="images/product7.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Good or God</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="images/product3.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
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
