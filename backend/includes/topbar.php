<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left" style="border-bottom: solid 1px #ddd">
        <a href="dashboard.php" class="logo" id="logo-tour"><img src="wqa.png" style="width: 30px;"> <span style="border-top:solid 10px transparent;"><?php echo $pdo_auth['name']; ?></span></a>
    </div>


    <nav class="navbar navbar-custom" style="background-color: #b39a4f">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="zmdi zmdi-menu"></i>
                </button>
            </li>
           
        </ul>

        <ul class="nav navbar-nav pull-right">
            <li class="nav-item dropdown notification-list">
                <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);" style="display: block;position: relative;">

                    <i class="zmdi zmdi-format-subject noti-icon"></i> <span style="background-color: red;color: #fff;border-radius:4px;margin-left:-10px;padding:3px;z-index: 1000">
                        <?php echo count_notification("notification", $pdo_auth['id']); ?></span>
                </a>
            </li>

            <li class="nav-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user"
                   data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="profile/<?php echo $pdo_auth['file']; ?>" alt="user" class="img-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown "
                     aria-labelledby="Preview">
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow">
                            <small><?php echo $pdo_auth['name']; ?></small>
                        </h5>
                    </div>
                    <a data-toggle="modal"  data-target="#myModal" style="cursor: pointer;" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                    </a>
                    <a href="change_photo.php" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-lock-open"></i> <span>Change Photo</span>
                    </a>
                    <a href="logout.php" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>

    </nav>

</div>
<!-- Top Bar End -->