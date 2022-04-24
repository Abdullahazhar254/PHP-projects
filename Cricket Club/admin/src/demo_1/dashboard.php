<?php
include 'connection.php';
 if(!isset($_SERVER['HTTP_REFERER']))
 {
     header('location: ../../../login/adminlogin.php');
 }
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdminDashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" >
            Pak Cricket Club </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
             
            </div>
          </form>
         
          <?php if(isset($_SESSION['admin_email'] )){?>
						
                     
                        <a href="adminlogout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></span> 
    
                        <?php } elseif (isset($_SESSION['user'])) { ?>
    
    <?php } ?>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
               
                <div class="text-wrapper">
                <span>Welcome,</span>
                <?php if(isset($_SESSION['admin_email'] )){?>
						
                     
                    <h3 class="profile-name"><?= $_SESSION['admin_email'] ?></h3>
    
                    <?php } ?>
                 
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
        
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">View Data</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="adminindex.php">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="batchindex.php">Batches</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="batch_formindex.php">Batch Form</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="groundindex.php">Grounds </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="groundimgindex.php">Ground Images </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="groundbookingindex.php">Ground Booking </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="memberindex.php">Memebers </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="noticeindex.php">Notices </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="packagesindex.php">Packages</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Insert Data</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="admininsert.php">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="batchinsert.php">Batches</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="groundinsert.php">Grounds </a>
                  </li>
               
                  <li class="nav-item">
                    <a class="nav-link" href="memberinsert.php">Memebers </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="noticeinsert.php">Notices </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="packagesinsert.php">Packages</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
       
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>