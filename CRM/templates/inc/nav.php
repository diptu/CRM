
<div class="clearfix"> </div>

    <div class="page-container">

        <div class="page-sidebar-wrapper">

            <div class="page-sidebar navbar-collapse collapse">

                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <li class="sidebar-toggler-wrapper hide">

                        <div class="sidebar-toggler"> </div>

                    </li>
                    <li class="sidebar-search-wrapper">

                    </li>
                    <br>
                    <br>
                    <li class="nav-item start active">
                        <a href="dashboard.php" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <?php if(isset($_SESSION['type']) && $_SESSION['type']=='customer'){?>
                    <li class="nav-item start active1">
                        <a href="customer_profile.php" class="nav-link nav-toggle">
                            <i class="fa fa-cog"></i>
                            <span class="title">Profile</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                <?php } ?>
                    <?php if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){?>


                    <li class="nav-item             ">
                        <a href="javascript:;" class="nav-link nav-toggle">

                            <?php if(isset($diff)){?>
                            <?=$diff==0?'<i class="fa fa-users" aria-hidden="true"></i>':' <span class="badge badge-success">'.$diff.'</span>';?>
                            <?} else { ?>

                            <?php }?>

                                                    <span class="title">Customer Management</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item                      ">
                                <a href="customer.php" class="nav-link ">
                                    <span class="title">Customer</span>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item                         ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-indent" aria-hidden="true"></i>
                            <span class="title">Inventory Management</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">

                            <li class="nav-item                      ">
                                <a href="product.php" class="nav-link ">
                                    <span class="title">Product Management</span>
                                </a>
                            </li>
                            <li class="nav-item                      ">
                                <a href="warehouse.php" class="nav-link ">
                                    <span class="title">Product Stock / Warehouse</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                <!--    <li class="nav-item             ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-print" aria-hidden="true"></i>
                            <span class="title">Generate Invoice</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item                      ">
                                <a href="#" class="nav-link ">
                                    <span class="title">Sale Management</span>
                                </a>
                            </li>
                            <li class="nav-item                      ">
                                <a href="#" class="nav-link ">
                                    <span class="title">Sold History</span>
                                </a>
                            </li>

                        </ul>
                    </li>-->



                    <li class="nav-item                         ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                            <span class="title">Supplier Management</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="supply.php" class="nav-link ">
                                    <span class="title">Manage Suppliers</span>
                                </a>
                            </li>
                        <!--    <li class="nav-item  ">
                                <a href="#" class="nav-link ">
                                    <span class="title">Supply Management</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="#" class="nav-link ">
                                    <span class="title">Reports</span>
                                </a>
                            </li>-->

                        </ul>
                    </li>








                    <li class="nav-item                         ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                            <span class="title">Note / Draft</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="add.php" class="nav-link ">
                                    <span class="title">Add</span>
                                </a>
                            </li>

                            <li class="nav-item  ">
                                <a href="manage_note.php" class="nav-link ">
                                    <span class="title">Manage</span>
                                </a>
                            </li>

                        </ul>
                    </li>



                    <li class="nav-item             ">
                        <a href="contact.php" class="nav-link nav-toggle">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                            <span class="title">Contact List</span>
                        </a>
                    </li>




                    <!-- <li class="nav-item             ">
                        <a href="support.php" class="nav-link nav-toggle">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                            <span class="title">Support <span class="badge badge-danger">0 </span></span>
                        </a>
                    </li> -->


                    <li class="nav-item start active1">
                        <a href="general_management.php" class="nav-link nav-toggle">
                            <i class="fa fa-cog"></i>
                            <span class="title">General Management</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <?php } ?>

                </ul>

            </div>
        </div>
