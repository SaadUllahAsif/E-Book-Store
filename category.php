<?php
  require("connect.php");
  session_start();
  if(isset($_POST['add']))
  {
    $bookno=$_POST['number'];
    $category=$_POST['category'];
    $name=$_POST['name'];
    $author=$_POST['author'];
    $price=$_POST['price'];
   
    
    $query="INSERT INTO `book`(`bookno`, `category`, `name`, `author`, `price` ) VALUES ('$bookno','$category','$name','$author','$price')";
    $data= mysqli_query($con, $query);
    
    $imgname= time()."_". $_FILES['uploadimage']['name'];
  
    $folder = "imag/".$imgname;
   
    if(move_uploaded_file($_FILES ['uploadimage']['tmp_name'],$folder))
        {
            $updatesql = "UPDATE `book` SET `image`='$imgname' WHERE `bookno`='$bookno'";
            $data = mysqli_query($con,$updatesql);

            if($data)
                {
		            echo "Update Successfull";
                }
            else
                {
                    echo "Update failed";
                }
        }
        if($data)
    {
      echo " ";
    }
    else
    {
      echo " Add Failed!";
    }
  }


  if(isset($_POST['update']))
  {
    $bookno=$_POST['updatenumber'];
    $category=$_POST['updatecategory'];
    $name=$_POST['updatename'];
    $author=$_POST['updateauthor'];
    $price=$_POST['updateprice'];
    
    $query="UPDATE `book` SET `category`='$category',`name`='$name',`author`='$author',`price`='$price' WHERE `bookno`='$bookno'";
    $data= mysqli_query($con, $query);
    if($data)
    {
      echo " ";
    }
    else
    {
      echo "Failed!";
    }
  }
  if(isset($_POST['delete']))
  {
    $bookno=$_POST['deletenumber'];    
    $query="DELETE FROM `book` WHERE `bookno`='$bookno'";
    $data= mysqli_query($con, $query);
    if($data)
    {
      echo " ";
    }
    else
    {
      echo "Failed!";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title> Categories </title>

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
              <th scope="col">Book Number</th>
              <th scope="col">Category</th>
              <th scope="col">Name</th>
              <th scope="col">Author</th>
              <th scope="col">Price</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
            <tbody>
              <?php
                    $query="SELECT * FROM `book`";
                    $data= mysqli_query($con,$query);
                    if($data)
                    {
                      while($row = $data->fetch_assoc())
                      { 
                        echo "<tr><td>" .$row["bookno"]."</td><td>" .$row["category"]. "</td><td>" .$row["name"]. 
                              "</td><td>" .$row["author"]. "</td><td>" .$row["price"]. "</td><td>" .$row["image"]. "</td>";
                              print'<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter2">UPDATE</button>';
                              print'<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter3">Delete</button></td>';
                              "</tr>";
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
            <div class="row">
              <div class="col-xl-4 col-sm-6">
                  <div class="card card-mini mb-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">ADD</button>

                            <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Catogery</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                            <form method="post" action="" enctype="multipart/form-data">
                              <div class="login">
                                  <div class="container-fluid">
                                      <div class="row">
                                          <div class="col-lg-6">    
                                              <div class="register-form">
                                                  <div class="row">
                                                    <label>Book Numbre</label>
                                                    <input class="form-control" type="text" name="number" placeholder="Book Number" required>
                                                    <label>Category</label>
                                                    <input class="form-control" type="text" name="category" placeholder="Book Category" required>
                                                        
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="name" placeholder="Book Name" required>
                                                        
                                                    <label>Auther</label>
                                                    <input class="form-control" type="text" name="author" placeholder="Book Author" required>
                                                        
                                                    <label>Price</label>
                                                    <input class="form-control" type="text" name="price" placeholder="Book Price" required>

                                                    <label>Image</label>
                                                    <input class="form-control" type="file" name= "uploadimage" required >
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button class="btn btn-success" name="add">Add</button>
                                
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-success">Add</button> -->
                                </div>
                              </form>
                          </div>
                      </div>
                  </div>
             </div>
          </div>
        
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">  
                            <!-- Button trigger modal -->
                    

                                <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Category</h5>
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
                                                
                                                              <label>Book Numbre</label>
                                                              <input class="form-control" type="text" name="updatenumber" placeholder="Book Number" required>

                                                              <label>Category</label>
                                                              <input class="form-control" type="text" name="updatecategory" placeholder="Book Category" required>
                                                        
                                                              <label>Name</label>
                                                              <input class="form-control" type="text" name="updatename" placeholder="Book Name" required>
                                                        
                                                              <label>Auther</label>
                                                              <input class="form-control" type="text" name="updateauthor" placeholder="Book Author" required>
                                                        
                                                              <label>Price</label>
                                                              <input class="form-control" type="text" name="updateprice" placeholder="Book Price" required>
                                                  </div>
                                              </div>
                                          </div>
                                        

                                      </div>
                                  </div>
                              </div>
                              
                                </div>
                                <div class="modal-footer">
                                    <button name="update" class="btn btn-secondary"> Update </button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- <input Class="btn btn-secondary" type="submit" name="update" value="Update"> -->
                                    <!-- <button type="button" class="btn btn-secondary">Update</button> -->
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">  
                            <!-- Button trigger modal -->
                    

                                <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Category!</h5>
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
                                                
                                                              <label>Book Numbre</label>
                                                              <input class="form-control" type="text" name="deletenumber" placeholder="Book Number">

                                                             <h2> Are You Sure!</h2>
                                                  </div>
                                              </div>
                                          </div>
                                        

                                      </div>
                                  </div>
                              </div>
                              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input Class="btn btn-danger" type="submit" name="delete" value="Delete">
                                    <!-- <button type="button" class="btn btn-danger">Delete</button> -->
                                </div>
                                </form>
                            </div>
                        </div>
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
