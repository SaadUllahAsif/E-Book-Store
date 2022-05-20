<?php
  require("connect.php");
  session_start();

  if(isset($_POST['register']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $passwor=$_POST['password'];

    $query="INSERT INTO `admin`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email','$number','$passwor')";
    $data=mysqli_query($con,$query);
    if($data)
    {
      echo "registered";
    }
    else
    {
      echo "Registration Failed!";
    }
  }
  // delivered cancelled
  

    // $check=mysqli_fetch_assoc($data);
    // $_SESSION['id']=$check['id'];
    // echo $_SESSION['id'];

      // $query="INSERT INTO `orders` `orderstatus` VALUES 1 ";
      // 

 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title> Admin Dashboard </title>

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
              <a href="#">
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
              <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Reports</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="http://localhost/ebook/salesreport.php">
                                <span class="nav-text">Sales</span>  
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="http://localhost/ebook/purchasereport.php">
                                <span class="nav-text">Purchase</span>  
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="http://localhost/ebook/profitlosereport.php">
                                <span class="nav-text">Profit & Lose</span> 
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
              <li  class="has-sub" >
                    <a href="http://localhost/ebook/category.php" >
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Categories</span>
                    </a>
                 
                </li> 

                <li  class="has-sub" >
                    <a href="http://localhost/ebook/stocks.php" >
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Stock</span>
                    </a>
                 
                </li>                 

                <li  class="has-sub" >
                    <a href="http://localhost/ebook/customerview.php">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">Customers</span> 
                    </a>
                    
                    
                  </li>
                  <li  class="has-sub" >
                 
                    <a href="#" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">Add Admin</span> 
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

      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Admin Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="">
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                            <div class="row">

                              <label>Name</label>
                              <input class="form-control" type="text" name="name" placeholder="Name">
                                   
                              <label>E-mail</label>
                              <input class="form-control" type="email" name="email" placeholder="E-mail">
                                   
                              <label>Mobile No</label>
                              <input class="form-control" type="text" name="number" placeholder="Mobile No">
                                   
                              <label>Password</label>
                              <input class="form-control" type="password" name="password" placeholder="Password">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-success">Save changes</button> -->
        <input class="btn btn-success" type="submit" name="register" value="Register">
      </div>
    </div>
  </div>
</div>
                 

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
                        <?php echo $_SESSION ['name']; ?> <small class="pt-1"> <?php echo $_SESSION ['email']; ?></small>
                        </div>
                      </li>

                      <li>
                        <a href="#">
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


        <div class="content-wrapper">
          <div class="content">						 
                  <!-- Top Statistics -->
                  
 						
							
						<div class="row">
							<div class="col-12"> 
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Orders</h2>
                      
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th class="d-none d-md-table-cell">Email</th>
                            <th class="d-none d-md-table-cell">Number</th>
                            <!-- <th>Product Name</th>
                            <th class="d-none d-md-table-cell">Order Cost</th> -->
                            <th>Action</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <?php
                         $date = date('y-m-d');
                          $query="SELECT `customerid`,`id` FROM `orders` WHERE `date`='$date'";
                          // echo $query;
                          $result=mysqli_query($con,$query);
                          
                          
                          
                          
                          if($result)
                          {
                           
                            while($row = $result->fetch_assoc())
                            {
                              
                              $session=$row["customerid"];
                              $iid=$row["id"];
                         
                          
                              $query="SELECT * FROM `customer` WHERE `id`='$session' ";
                              $data= mysqli_query($con,$query);
                              if($data)
                              {
                                while($row = $data->fetch_assoc())
                                {
                                  echo "<tr><td>" .$row["firstname"]."</td><td>" .$row["email"]. "</td><td>" .$row["mobilenumber"]. "</td><td>";
                                  print '<a href="vieworder.php?orderno='.$iid.'"><button type="submit"  name="approve" class="badge badge-success">View Order</button> </a>';
                                  print '<a href="invoice.php?orderno='.$iid.'"><button type="submit" name="invoice" class="badge badge-secondary">Invoice</button> </a>';
                                  "</td><br>";
                              
                                }
                              }
                            }
                          }
                           else
                            {
                              echo "failed";

                            }
                          

                                  ?>
                                  
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
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
