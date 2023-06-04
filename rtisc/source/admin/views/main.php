
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rtisc</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo ROOT_URL;?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo ROOT_URL;?>assets/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
  </head>
  <body>
    <div class="container-scroller">
      <?php if(isset($_SESSION['is_logged_in'])) :?>
      <!-- partial:partials/_navbar.html -->
      <?php include "partials/_navbar.php" ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "partials/_sidebar.php" ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <?php require($view);?>
          </div>
        </div>
      </div>
      <?php else : ?>
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <?php require($view);?>
      </div>
      <?php endif;?>
      <?php include 'partials/_footer.php';?>
    </div>
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo ROOT_URL;?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo ROOT_URL;?>assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo ROOT_URL;?>assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo ROOT_URL;?>assets/js/off-canvas.js"></script>
    <script src="<?php echo ROOT_URL;?>assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo ROOT_URL;?>assets/js/misc.js"></script>
     <!-- Custom js for this page -->
     <script src="<?php echo ROOT_URL;?>assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- endinject -->
   
    <script>
$(document).ready(function() {
    $('#userTable').DataTable(
      {
        "lengthMenu": [[15, 25, 50, 100, -1], [15, 25, 50, 100, "All"]],
        "order": [[ 0, "desc" ]]
      }
    );
});
</script>
  </body>
</html>