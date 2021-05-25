<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:../login/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard: Events</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>


@media only screen and (min-width: 600px) {
   #heading1{
 
   padding-left:40%;
  }
}

@media only screen and (max-width: 980px) {
  
    #imgid1{

 width:100% !important;
 height:auto !important;
 
padding:40% 5% 10% 5% !important; 
  }

  .responsiveTable{
  overflow-x: scroll;
  }
}
</style>

</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon ">
         
          <img  id="imgid1"style="height:auto; width:60%; padding:30% 5% 10% 10% ; margin-top:5%;" src="../image/spanlogo.png" alt="">
          
        </div>
        <!-- <div class="sidebar-brand-text ">hotel span</div> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-5">
      
           
      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>
     
      <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="gallery.php">
          <i class="fas fa-images "></i>
          <span>Gallery</span></a>
      </li>
       <!-- Nav Item - Tables -->
       <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-calendar"></i>
          <span>Events</span></a>
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
            <i class="fa fa-bars"></i>
          </button>

          <div id="heading1">
          <h4> HOTEL SPAN</h4>
         </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <!-- Nav Item - Alerts -->
           
                       <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                             
                <a class="dropdown-item" href="../login/logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="container-fluid bg-primary  ">
          <div class="row">
            <div class="col-md-12">
             <h2 class="text-white ">  Add new event</h2>
            </div>
          </div>
        </div>
        <!-- End of Topbar -->

        <!-- Upload new event form -->
    <div class="container-fluid">
      <div class="row">
       <div class="col-md-6">
         <form action="eventaction.php" method="post" enctype="multipart/form-data" class="mt-4">
          
            <div class="form-group form-inline">
              <label for="ttl">Title:   &emsp; &emsp; &emsp;</label>
              <input type="text" id="ttl" name="title" class="form-control" required>
            </div>
            <div class="form-group form-inline">
              <label for="desc">Description:  &nbsp;</label>
              <input type="text" id="desc" name="description" class="form-control" required>
            </div>
            <div class="form-group form-inline">
              <label for="img">Image: &emsp; &emsp;  </label>
                <input style=" max-width:50%; height:auto;"type='file' accept='image/*' name="file" id="img" class="form-control" required>
            </div>
            <div class="form-group form-inline">
              <label for="date">Date  &emsp; &emsp; &emsp;</label>
              <input type="date" id="date" class="form-control" name="date">
            </div>
            <div class="form-group form-inline">
              <label for="time"> Time:  &nbsp; &emsp; &emsp;</label>
              <input type="time" id="time" class="form-control" name="time">
            </div>
            <div class="form-group form-inline">
              <label for="venue">Venue: &emsp;&emsp;</label>
              <input type="text" id="venue" class="form-control" name="venue">
            </div>
            <div class="form-group form-inline">
              <label for="venue">Organizer:&emsp;</label>
              <input type="text" id="Organizer" class="form-control" name="organizer">
            </div>
            <input type="submit" value="upload" name="submit" class="btn btn-primary" >
          </form>
       </div>
      </div>
    </div>

      <div class="container-fluid bg-primary mt-4">
      <div class="row">
        <div class="col-md-12">
         <h2 class="text-white ">Uploaded events</h2>
        </div>
      </div>
    </div>
    <!-- ---------------- -->
    <div class="container-fluid responsiveTable">
    
      <div class="row col-md-12">
      <table class="table table-bordered">
      <thead>
                    <tr>
                      <th scope="col">S.N</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Image</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Venue</th>
                      <th scope="col">Organizer</th>
                      <th scope="col">Action</th>
                    </tr>
               </thead>
                <tbody >
                <?php 
                   $conn = mysqli_connect("localhost","root","","hotelspan");
                   $sql ="SELECT * FROM events";
                   $runquery = mysqli_query($conn,$sql);
                   
                       while($result = mysqli_fetch_array($runquery)){
                        ?>
                      
                <!--display event in dashboard ---------------------- -->
              
                    <tr class="text-justify">
                        <th scope="row"><?php  echo $result['id']; ?></th>
                        <td><?php echo $result['title']; ?></td>
                        <td><?php echo $result['description']; ?></td>
                        <td> <img src="<?php echo $result['image'];?>" height="50px" width="50px"> </td>
                        <td><?php echo $result['date']; ?></td>
                        <td><?php echo $result['time']; ?></td>
                        <td><?php echo $result['venue'];?></td>
                        <td><?php echo $result['organizer'];?></td>
                        <td>
                           <a href="deleteevent.php?id=<?php echo $result['id'] ?>"><span style="color:red ">Delete</span></a> 
                        </td>
                    </tr>
                    <?php 
                       }
                 ?>
            </tbody>
         </table>
                <!-- -- -->
                
           <!-- ---------------------- -->
                     
                          
      </div>
    </div>
           
      <!-- Footer -->
    <footer style="margin-top:5% ">
  <div class="container clearfix bg-secondary text-white text-center">
  <div class="col-lg-12"> <span class="alignleft small ">Copyright &copy;2020 All Rights Reserved.</span> <span class="alignright small">Made with <i class="fa fa-heart"></i> by <a  class="text-white"  href="http://ansunepal.com/" >Ansu Tech</a>. </span> </div>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  

</body>

</html>
