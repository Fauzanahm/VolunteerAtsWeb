<?php
include "./config.php";
session_start();
$id_member = $_GET['id_member'];
$data = mysqli_query($mysqli, "SELECT * FROM user WHERE id_member='$id_member'");
$dr = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Profile</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
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
        <div class="sidebar-brand-text mx-3">Volunteer ATS Esq</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="./index.php?id_member=<?php echo $_SESSION['id_member'];?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="profil.php?id_member=<?php $_SESSION['id_member'];?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Profil</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item active">
      <a class="nav-link" href="./acara.php?id_member=<?php echo $_SESSION ['id_member']; ?>">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Acara</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars">#</i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $dr['name'];?></span>
                <img class="img-profile rounded-circle" src="<?php echo $dr['foto'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="./FormLogin.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <form action="proses_edit_profile.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_member" value="<?php echo $dr['id_member']; ?>">
            <div class="mb-2">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" value="<?php echo $dr['name']; ?>">
            </div>
            <div class="mb-2">
            <fieldset disabled>
            <label class="form-label">Email</label>
            <input type="text"  class="form-control" name="email" value="<?php echo $dr['email']; ?>">
            </fieldset>
            </div>
            <div class="mb-2">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?php echo $dr['username']; ?>">
            </div>
            <div class="mb-2">
              <label class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $dr['tempat_lahir']; ?>" >
            </div>
            <div class="mb-2">
              <label class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $dr['tanggal_lahir']; ?>">
            </div>
            <div class="mb-2">
              <label class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php echo $dr['alamat']; ?>">
            </div>
            <div class="mb-2">
              <label class="form-label">No Handphone</label>
              <input type="text" class="form-control" name="nohp" value="<?php echo $dr['nohp']; ?>">
            </div>
            <div class="mb-2">
            <fieldset disabled>
            <label class="form-label">Status</label>
            <input type="text"  class="form-control" name="status" value="<?php echo $dr['status']; ?>">
            </fieldset>
            </div>
            <div class="mb-2">
              <label class="form-label">Foto</label>
              <img src="<?php echo $dr['foto']; ?>" >
              <input type="file" class="form-control" name="foto">
            </div>
            <input class="btn btn-primary my-3" type="submit" value="edit">
            </form>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; kelompok 3</span>
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
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="./logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>