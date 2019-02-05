<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?=SITE_TITLE;?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="templates/inc/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="templates/inc/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="templates/inc/css/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="templates/inc/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="templates/inc/css/ajax.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- END THEME LAYOUT STYLES -->
    <script src="templates/inc/js/jquery.min.js" type="text/javascript"></script>

    <!-- END HEAD -->
    </head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <div class="page-logo">
                <a href="dashboard.php">
                    <img src="logo.svg" style="height: 30px" width="250px" alt="logo" class="logo-default" /> </a>
                <div class="menu-toggler sidebar-toggler"></div>
            </div>
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile">
                                <?=ucfirst($_SESSION['name']);?>
                            </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <?php if(isset($_SESSION['type']) && $_SESSION['type']=='customer'){?>
                                <li>
                                  <a href="customer_profile.php">
                                      <form id="logout-form" action="#" method="POST">

                                          <i class="icon-key"></i> Profile
                                      </form>
                                  </a>
                                </li>

                            <?php } ?>

                            <!-- <li>
                                <a href="#changePassword" data-toggle="modal">
                                    <i class="icon-settings"></i> Change Password
                                </a>
                            </li> -->
                            <li>
                                <a href="logout.php">
                                    <form id="logout-form" action="#" method="POST">

                                        <i class="icon-key"></i> Log Out
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
