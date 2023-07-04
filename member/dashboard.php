

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>MemberLogin page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Payments</as>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!--header i have to fetch uname here..... it will fetch all the data of this id--->
<?php
include('../constant/connect.php');
$sel = "SELECT * FROM users";
 $query= mysqli_query($con, $sel);
  $resul= mysqli_fetch_assoc($query);
  ?>
<h1 class="text-center"> Welcome to the Dashboard <?php echo $resul['username']; ?></h1>
<!---this is the original form--->

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                   
                    <div class="card-body">

                        <form method="GET" action="">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="userid" placeholder="enter member id" value=<?php echo 
                                        $resul['userid']; ?> readonly class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">user details</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                               

                                    $con = mysqli_connect("localhost","root","","scms");

                                    if(isset($_GET['userid']))
                                    {
                                        $userid = $_GET['userid'];

                                        $query = "SELECT * FROM users WHERE userid='$userid' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                               
                                                <div class="form-group mb-3">
                                                    <label for="">Gender</label>
                                                    <input type="text" value="<?= $row['gender']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Mobile No.</label>
                                                    <input type="text" value="<?= $row['mobile']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Email</label>
                                                    <input type="text" value="<?= $row['email']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Date Of Birth</label>
                                                    <input type="text" value="<?= $row['dob']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Joining Date</label>
                                                    <input type="text" value="<?= $row['joining_date']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


