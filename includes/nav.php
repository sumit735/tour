<?php include "db.php"; ?>

<header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
							<li style="display:none"><a href="register.php" id="access_link"></a></li>
							<li><a href="register.php" id="access_link">Sign Up</a></li>
							<li><a href="login.php" id="access_link">Sign In</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="index.php" title="City tours travel template">City Tours travel template</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Home</a>
                                
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <?php 
                                    
                                        $query = "SELECT * FROM tour_category";
                                        $select_all_categories_query = mysqli_query($connection, $query);
                                        
                                        while($row = mysqli_fetch_assoc($select_all_categories_query)){

                                        $tour_title =  $row['tours_name'];
                                        echo "<li><a href='all_tours_list.php'>{$tour_title}</a></li>";
                                        
                                        }
                                    ?>
                                    
                                </ul>
                            </li>
							<li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Packages <i class="icon-down-open-mini"></i></a>
                                <ul>

                                    <?php 
                                    
                                    $query = "SELECT * FROM package_category";
                                    $select_all_categories_query = mysqli_query($connection, $query);
                                    
                                    while($row = mysqli_fetch_assoc($select_all_categories_query)){

                                      $package_title =  $row['package_name'];
                                      echo "<li><a href='all_tours_list.php'>{$package_title}</a></li>";
                                    
                                    }
                                    
                                    ?>
                                    
                                    
                                </ul>
                            </li>
							<li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Cab Booking</a>
                                
                            </li>
							<li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">About Us</a>
                                
                            </li>
							<li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Contact Us</a>
                                
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                    
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->