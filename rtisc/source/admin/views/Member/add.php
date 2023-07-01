<div class="content-wrapper d-flex align-items-center auth">
  <div class="row flex-grow">
    <div class="col-lg-8 mx-auto">
      <div class="auth-form-light text-left p-5">
        <h4>Add New User</h4>
        <form class="pt-3" method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 
          <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <select class="form-control form-control-lg" id="gender" name="gender">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
              <div class="controls">
                <input type="date" name="dor" class="form-control form-control-lg" />
                <span class="help-block">Date of registration</span> </div>
            </div>

            <div class="form-group">
              <label class="control-label">Total Amount</label>
              <div class="controls">
                <div class="input-append">
                  <span class="add-on">&#8377;</span> 
                  <input type="number" placeholder="50" name="plan"  id="plan" class="form-control form-control-lg" >
                  </div>
              </div>
            </div>

        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Contact Details</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Contact Number</label>
              <div class="controls">
                <input type="number" id="mask-phone" name="contact" placeholder="Contact Number" class="span8 mask text">
                <span class="help-block blue span8">(999) 999-9999</span> 
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Address" />
              </div>
            </div>
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
 