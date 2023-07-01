<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>User Profile</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="user_id" placeholder="enter member_id" value="<?php if(isset($_GET['user_id'])){echo $_GET['user_id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary" >Search</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="text" class="btn btn-primary text-center" 
                                     >Transaction Details</button>
                                </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","scms");

                                    if(isset($_GET['user_id']))
                                    {
                                        $user_id = $_GET['user_id'];

                                        $query = "SELECT * FROM members WHERE user_id='$user_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['fullname']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Dor</label>
                                                    <input type="text" value="<?= $row['dor']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">amount</label>
                                                    <input type="text" value="<?= $row['amount']; ?>" class="form-control">
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
             <!--For transaction history-->
             <h1 class="text-center"> Transactions deatails</h1>
            </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","scms");

                                    if(isset($_GET['user_id']))
                                    {
                                        $user_id = $_GET['user_id'];

                                        $query = "SELECT * FROM members WHERE user_id='$user_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Status</label>
                                                    <input type="text" value="<?= $row['status']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Dor</label>
                                                    <input type="text" value="<?= $row['paid_date']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">plan</label>
                                                    <input type="text" value="<?= $row['plan']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">paid year</label>
                                                    <input type="text" value="<?= $row['p_year']; ?>" class="form-control">
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>