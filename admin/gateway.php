<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Payment Gateway Transcations</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Transcations</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                 <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
         <th>Sl.No</th>
          <th>Order Id</th>
          <th>Name</th>
          <th>Amount</th>
          <th>Email</th>
          <th>Date</th>
          <th>Status</th>
        </tr>
      </thead>    
        <tbody>
          <?php
              $query  = "select * from orders ORDER BY id desc";
              //echo $query;
              $result = mysqli_query($con, $query);
              $sno    = 1;

              if (mysqli_affected_rows($con) != 0) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $msgid = $row['order_id'];
                  ?> 
          
                  
                  <tr>
                    <td><?php echo $sno; ?></td>
                     <td><?php echo $row['order_id']; ?></td>
                     <td><?php echo $row['yname']; ?></td>
                     <td><?php echo $row['amount']; ?></td>
                     <td><?php echo$row['email']; ?></td>
                     <td><?php echo $row['ydate']; ?></td>
                     <td><?php echo $row['ystatus']; ?> </td>
                  </tr>
                  
              <?php 
              $sno++; 
              $msgid = 0;
            }
              
        }

        ?>  


        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('../constant/layout/footer.php');?>
  <!--  This Project Developed by: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me through https://www.mayurik.com  -->

