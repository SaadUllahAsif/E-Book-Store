<?php
  require("connect.php");
  session_start();
  $sample=$_GET ['orderno'];

  if(isset($_POST['approve']))
  {
    $num="appeoved";
   
    
    $query="UPDATE `orders` SET `orderstatus`='$num' WHERE `id` = '$sample'";
    $data= mysqli_query($con, $query);
    if($data)
    {
        echo "approve";
    }else{
        echo "noooooo";
    }       
         $retval = mail ('saadasif292@gmail.com','This is subject','This is subject','From: saadasif@gmail.com');
         
         if( $retval == true ) {
            echo '<script>alert("Message sent successfully...")</script>';
         }else {
            echo '<script>alert("Message could not be sent...")</script>';
         }

         header("location:mailtest.php");
     }


  if(isset($_POST['deliver']))
  {
    $num1="delivered";
   
    
    $query="UPDATE `orders` SET `orderstatus`='$num1' WHERE `id` = '$sample'";
    $data= mysqli_query($con, $query);
    if($data)
    {
        echo "deliver";
    }else{
        echo "noooooo";
    }
  }
  if(isset($_POST['cancel']))
  {
    $num2="canceled";
   
    
    $query="UPDATE `orders` SET `orderstatus`='$num2' WHERE `id` = '$sample'";
    $data= mysqli_query($con, $query);
    if($data)
    {
        echo "panding";
    }else{
        echo "noooooo";
    }
}
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title> View Order </title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="dashbord.php">
                <div  class="brand-icon" style= "width= 30; height=33;"  >
                  <img src="images/logo.png" alt="Logo">
                  </div>
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
            </div> 
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
              <li  class="has-sub" >
                    <a href="http://localhost/ebook/category.php" >
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Categories</span>
                    </a>
                 
                </li> 
                

                

                
                <li  class="has-sub" >
                    <a href="http://localhost/ebook/stocks.php">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Stock</span>
                    </a>
                 
                </li>                 

                <li  class="has-sub" >
                    <a href="#">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">Customers</span> 
                    </a>
                    
                  </li>
                

  </ul>

             
            </div>

            <hr class="separator" />

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                
                </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                     
                      <span class="d-none d-lg-inline-block"> <?php echo $_SESSION ['name']; ?> </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                       
                        <div class="d-inline-block">
                        <?php echo $_SESSION ['name']; ?> <small class="pt-1"> <?php echo $_SESSION ['email']; ?> </small>
                        </div>
                      </li>

                      <li>
                        <a href="profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>
                      <li class="dropdown-footer">
                        <a href="hello.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Book Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sample=$_GET ['orderno'];
   
          
        $query=" SELECT * FROM `orders` WHERE `id` = '$sample'";
        $data= mysqli_query($con,$query);
        if($data)
        {
          while($row = $data->fetch_assoc())
          {
            echo "<tr><td>" .$row["date"]."</td><td>" .$row["bookname"]. "</td><td>" .$row["price"]. "</td></tr>";
          }
        }
            else
        {
          echo "failed";

        }
  ?>
  </tbody>
</table>

<div class="content-wrapper">
    <div class="content">	
    <form method="post" action="">
        <div class="row">
        
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">


       <input type="submit" name="approve" value="APPROVE ORDER" class="btn btn-success">
                   
                    <!-- <button type="button"  name ="approve" class="btn btn-success"> APPROVR ORDER </button> -->
                    </div>
                </div>
     
        
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">  
                <input type="submit" name="deliver" value="DELIVER ORDER" class="btn btn-secondary">
                    <!-- <button type="button" class="btn btn-secondary" > DELIVER ORDER </button> -->
                
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">  
                <input type="submit" name="cancel" value="CANCEL ORDER " class="btn btn-danger">
                    <!-- <button type="button" class="btn btn-danger"> CANCEL ORDER </button> -->

                      
                </div>
            </div>
            
        </div>
        </form>
    </div>
    </div>
                <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




  </body>
</html>
