<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-lg-8 mx-auto">
      <div class="auth-form-light text-left p-5">
        <h4>Add New Plan</h4>
        <form class="pt-3" method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 
          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="plan_name" name="plan_name" placeholder="Enter Plan Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="plan_amount" name="plan_amount" placeholder="Amount">
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="plan_duration" name="plan_duration" placeholder="Duration in months">
          </div>
          <div class="mt-3">
            <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- content-wrapper ends -->