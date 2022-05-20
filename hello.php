<?php
    require("connect.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Book Store </title>
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
                            <a href="#" class="btn wishlist">
                             <i class="fas fa-dollar-sign"></i>
                             <span> 0 </span>
                            </a>
                            
                            <?php
                            $userid=$_SESSION['id'];
                            if(isset($_POST["bill"])){
                            if($userid == NULL){
                                echo '<script> alert("login to order") </sprit>';
                            }
                            else {echo "";}
                        }

                           print' <a href="http://localhost/ebook/cart.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>'
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/ebook/hello.php"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/ebook/cart.php"><i class="fa fa-shopping-cart"></i>Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/ebook/listhorror.php"><i class="fa fa-book"></i>Horror</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/ebook/listclassic.php"><i class="fa fa-book"></i>Classics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/ebook/listfantacy.php"><i class="fa fa-book"></i>Fantacy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/ebook/listhistoric.php"><i class="fa fa-book"></i>Historical Fiction</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/ebook/listaction.php"><i class="fa fa-book"></i>Action & Adventure</a>
                                </li>
                                
                                
                              
                             
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="images/slider1.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>A room without books is like a body without a soul.</p>
                                    
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="images/slider2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Take a good book to bed with you—books do not snore.</p>
                                    
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="images/slider3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>There is more treasure in books than in all the pirate’s loot on Treasure Island.</p>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="images/clasisicscategory12.jpg" />
                                <a class="img-text" href="">
                                    <p>"Beloved" by Toni Morrison </p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="images/actioncategory11.jpg" />
                                <a class="img-text" href="">
                                    <p>"Life of Pi" by Yann Martel</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="images/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="images/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="images/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="images/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="images/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="images/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Worldwide Delivery</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>10 Days Return</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="images/fantacycategory13.jpg" />
                            <a class="category-name" href="">
                                <p>"The Water Dancer (Oprah's Book Club): A Novel" by Ta-Nehisi Coates</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="images/actioncategory26.jpg" />
                            <a class="category-name" href="">
                                <p>"The Call of the Wild" by Jack London</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="images/classicscategory27.jpg" />
                            <a class="category-name" href="">
                                <p>"Little Women (150th Anniversary Edition)" by Louisa May Alcott</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="images/hororcategory28.jpg" />
                            <a class="category-name" href="">
                                <p>"The Haunting of Hill House (Penguin Classics)" by Shirley Jackson</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="images/hororcategory15.jpg" />
                            <a class="category-name" href="">
                                <p>"Carrie Mass Market" by Stephen King </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="images/historycategory14.jpg" />
                            <a class="category-name" href="">
                                <p>"Memoirs of a Geisha: (Novel)" by Arthur Golden</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us at store</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:01234567890">+123-456-7890</a> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">You are your own limit</a>
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
                                    <img src="images/product1.jpg" alt="Product Image">
                                </a>
                               
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href="" name="buy" ><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Milk and Honey</a>
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
                                    <img src="images/product2.jpg" alt="Product Image">
                                </a>
                                
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a> 
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
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
                               
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Kcpta Cynep BNDEO</a> 
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
                                    <img src="images/product4.jpg" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Pioneers in Astronomy (Turkish-Islamic)</a> 
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
                                    <img src="images/product5.jpg" alt="Product Image">
                                </a>
                              
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us at office</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:01234567890">+123-456-7890</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->  
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Saville</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                             
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="images/product6.jpg" alt="Product Image">
                                </a>
                             
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Devil's Cup </a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="images/product7.jpg" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Proverbs</a> 
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="images/product8.jpg" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Alix Rider</a> 
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
                                    <img src="images/product9.jpg" alt="Product Image">
                                </a>
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Hygiene</a> 
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="images/product10.jpg" alt="Product Image">
                                </a>
                              
                            </div>
                            <div class="product-price">
                                <!-- <h3><span>$</span>99</h3> -->
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                <br> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Olivia</h2>
                                <h3>Reviewer</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    In my profession I need to have different categories of book and all types.
                                    From here I have always got the book I needed in a good price and is always delivered on time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>William</h2>
                                <h3>Historian</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                Historians often have cause to deal with rare and old materials including books. 
                                Consider showing off a collection of rare books on an estate tour of a famous bibliophile.
                                I am always able to get every required book from here.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Aria</h2>
                                <h3>Book Seller</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                In my profession I have to work with new books, used books, antique books, special books, 
                                or any other specific kind of collection. I am always able to get every required book from here.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
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
<?php
echo "OK";
?>
