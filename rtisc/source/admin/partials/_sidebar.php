<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo ROOT_URL;?>dashboard">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo ROOT_URL;?>transcation">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Transcation</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#member" aria-expanded="false" aria-controls="member">
      <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
        <span class="menu-title">Member</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="member">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo ROOT_URL;?>member"> Member List </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo ROOT_URL;?>member/add"> Add New Member </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#plan" aria-expanded="false" aria-controls="plan">
      <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
        <span class="menu-title">Plan Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="plan">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo ROOT_URL;?>plan"> Plan List </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo ROOT_URL;?>plan/add"> Add New Plan </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
      <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo ROOT_URL;?>users"> User List </a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo ROOT_URL;?>users/add"> Add New User </a></li>
        </ul>
      </div>
    </li>
    <?php if(isset($_SESSION['is_logged_in'])) :?>
    <li class="nav-item sidebar-user-actions">
      <div class="user-details">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <div class="d-flex align-items-center">
              <div class="sidebar-profile-img">
                <img src="<?php echo $profile_pic; ?>" alt="image">
              </div>
              <div class="sidebar-profile-text">
                <p class="mb-1"><?php echo $_SESSION['user_data']['name']; ?></p>
              </div>
            </div>
          </div>
          <div class="badge badge-danger">3</div>
        </div>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </div>
    </li>
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="<?php echo ROOT_URL; ?>users/logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li>
    <?php else : ?>
      
    <?php endif;?>
  </ul>
</nav>