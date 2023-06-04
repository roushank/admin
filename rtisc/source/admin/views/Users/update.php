<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-lg-8 mx-auto">
      <div class="auth-form-light text-left p-5">
        <h4>UPDATE New User</h4>
        <form class="pt-3" method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 
          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <select class="form-control form-control-lg" id="role" name="role">
              <option>Role</option>
              <option>Admin</option>
              <option>Member</option>
              <option>Super admin</option>
            </select>
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
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