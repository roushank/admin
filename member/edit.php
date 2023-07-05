<?php include('inc/header.php');
// Check if the ID parameter exists in the URL
if (isset( $_SESSION['id'])) {
    // Retrieve the ID from the URL
    $id = $_SESSION['id'];
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

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php
                                $id = $_SESSION['id'];

                                $query = "SELECT users.*, address.* FROM users JOIN address ON users.userid = address.id WHERE users.id='$id' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <form method="POST" action="">
                                        <div class="form-group mb-3">
                                                <label for="">Member ID</label>
                                                <input type="text" name="memberid" value="<?= $row['userid']; ?>" readonly class="form-control">
                                            </div>
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
              WHERE users.id = '$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        echo "<script>alert('Record updated successfully')</script>";
    } else {
        echo "Something went wrong";
    }
}

include('inc/footer.php'); ?>
