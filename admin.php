<?php 

session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GROOMING CENTRE</title>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2">GROOMING CENTRE <br> MESSAGE BOARD</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="buttons.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Message-Writte-up</span></a>
      </li>
       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Web Page</span></a>
      </li>
       <!-- Divider -->
       <hr class="sidebar-divider my-0">

      <!-- Sidebar Toggler (Sidebar) -->
      <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Grooming Centre Message-Box</h6>
            </div>

                 <!-- message text start -->
                 <?php if(isset( $_SESSION['success']) &&  $_SESSION['success'] !='')
                     {
                       echo '<h5 class="bg-success text-white">'.$_SESSION['success'].'</h5>';
                       unset($_SESSION['success']);
                     }
                     if(isset( $_SESSION['status']) &&  $_SESSION['status'] !='')
                     {
                       echo '<h6 class="bg-danger text-white">'.$_SESSION['status'].'</h6>';
                       unset($_SESSION['status']);
                     }
                    ?>
            <div class="card-body">
             
                   <form action="message_box" method="post">
                    <label>MESSAGE CATEGORY: </label><br>
                    <select name="roles" class="form-control">
                        <option value="">--Selete Categories--</option>
                        <option value="Head Q. Staff">Head Q. Staff</option>
                        <option value="Field Staff">Field Staff</option>
                        <option value="Programme Area">Programme Area</option>
                    </select><br><br>
                    <label >COMPOSE MESSAGE:</label><br>
                    <textarea name="comment" class="form-control" cols="30" rows="10">
                    </textarea><br><br>
                    <a href="buttons.php" class="btn btn-success">CANCEL</a>
                    <button type="submit" name="post_btn" class="btn btn-primary">POST</button>

                </form>
            </div> 
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Grooming Centre 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
