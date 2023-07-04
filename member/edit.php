<?php include('inc/header.php'); ?>
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

    <title>Member Update Data</title>
</head>
<body>


<!-- Header: I have to fetch the username here... It will fetch all the data of this ID -->
<?php
// Check if the ID parameter exists in the URL
if (isset($_GET['userid'])) {
    // Retrieve the ID from the URL
    $id = $_GET['userid'];

    // Set the value of the text field
    $textFieldValue = $id;
} else {
    // Default value if the ID parameter is not present
    $textFieldValue = '';
}
?>
<div class="mt-5">
<h5 class="text-center" class="col-md-4">Update your details here..</h5>
</div>
<!-- Original form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card mt-5">
                <div class="card-body">
                    <form method="GET" action="">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="userid" value="<?php echo $textFieldValue; ?>" readonly class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" name="details" class="btn btn-primary">User Details</button>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "scms");

                            if (isset($_GET['details'])) {
                                $userid = $_GET['userid'];

                                $query = "SELECT users.*, address.* FROM users JOIN address ON users.userid = address.id WHERE users.userid='$userid' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <form method="POST" action="">
                                            <div class="form-group mb-3">
                                                <label for="">Name</label>
                                                <input type="text" name="username" value="<?= $row['username']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3" >
                                                    <label for="">Mobile No.</label>
                                                    <input type="text"  name="mobile" value="<?= $row['mobile']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3" >
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" type="email" value="<?= $row['email']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3" >
                                                    <label for="">Street Name</label>
                                                    <input type="text" name="streetname" value="<?= $row['streetName']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3" >
                                                    <label for="">State</label>
                                                    <input type="text" name="state" value="<?= $row['state']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3" >
                                                    <label for="">City</label>
                                                    <input type="text" name="city" value="<?= $row['city']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3" >
                                                    <label for="">Zipcode</label>
                                                    <input type="text" name="zipcode"  value="<?= $row['zipcode']; ?>" class="form-control">
                                                </div>

                                            <input type="hidden" name="userid" value="<?= $userid; ?>">
                                            <div class="form-group mb-3">
                            <button type="submit" name="update" class="btn btn-primary text-center">Update</button>
                                            </div>
                                        </form>
                                        <?php
                                    }
                                } else {
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
<!--This Is for update of user-->
<?php
if (isset($_POST['update'])) {
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $streetname = $_POST['streetname'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];

    $query = "UPDATE users 
              JOIN address ON users.userid = address.id 
              SET users.username = '$username',
                  users.mobile = '$mobile',
                  users.email = '$email',
                  address.streetName = '$streetname',
                  address.state = '$state',
                  address.city = '$city',
                  address.zipcode = '$zipcode'
              WHERE users.userid = '$userid'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo "<script>alert('Record updated successfully')</script>";
    } else {
        echo "Something went wrong";
    }
}
?>
<!-----udpated---->


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php include('inc/footer.php'); ?>
