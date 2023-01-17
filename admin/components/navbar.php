<div class="header">
    <div class="header-left">
        <a href="index.php" class="logo">
            <span class="logoclass">
                Bike Shop
            </span>
        </a>
        <a href="index.php" class="logo logo-small"> <img
                src="./assets/img/bike_logo.png"
                width="30" height="30" alt=""> </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">
        <!-- <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i>
                <span class="badge badge-pill">3</span> </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a
                        href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media"> <span class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                            approved <span class="noti-title">your estimate</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
            </div>
        </li> -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fe fe-user"></i>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <i class="fe fe-user"></i>
                    </div>
                    <div class="user-text">
                        <h6>
                            Administator
                        </h6>
                        <p class="text-muted mb-0">
                            <?= $admin['email'] ?>
                        </p>
                    </div>
                </div>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
    </ul>
</div>