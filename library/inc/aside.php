<?php 
    echo '
    <div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="#"><img alt="" src="assets/images/logo.png" width="122" height="27"></a>
            <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
                <i class="material-icons ttr-fixed-icon">gps_fixed</i>
                <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
            </div> -->
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-left"></i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="index.php" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashboard</span>
                    </a>
                </li> <!--
                <li>
                    <a href="courses.html" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">Clear Student</span>
                    </a>
                </li> -->
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-email"></i></span>
                        <span class="ttr-label">Clearance</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="approve-student-clearance.php" class="ttr-material-button"><span class="ttr-label">Approve Student Clearance</span></a>
                        </li>
                        <li>
                            <a href="clearance-status.php" class="ttr-material-button"><span class="ttr-label">Clearance Status</span></a>
                        </li>
                        <li>
                            <a href="search-student.php" class="ttr-material-button"><span class="ttr-label">Search Student</span></a>
                        </li>
                     <!--   <li>
                            <a href="mailbox-read.html" class="ttr-material-button"><span class="ttr-label">Mail Read</span></a>
                        </li> -->
                    </ul>
                </li> <!--
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-calendar"></i></span>
                        <span class="ttr-label">Calendar</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="basic-calendar.html" class="ttr-material-button"><span class="ttr-label">Basic Calendar</span></a>
                        </li>
                        <li>
                            <a href="list-view-calendar.html" class="ttr-material-button"><span class="ttr-label">List View</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="bookmark.html" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
                        <span class="ttr-label">Bookmarks</span>
                    </a>
                </li>
                <li>
                    <a href="review.html" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-comments"></i></span>
                        <span class="ttr-label">Review</span>
                    </a>
                </li>
                <li>
                    <a href="add-listing.html" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
                        <span class="ttr-label">Add listing</span>
                    </a>
                </li> -->
                <li>
                    <a href="../logout.php" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Logout</span>
                    </a>
                </li> 
               <!-- <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">User Account</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="user-profile.html" class="ttr-material-button"><span class="ttr-label">Create User</span></a>
                        </li>
                        <li>
                            <a href="teacher-profile.html" class="ttr-material-button"><span class="ttr-label">Manage User</span></a>
                        </li>
                    </ul>
                </li> -->
                <li class="ttr-seperate"></li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>
    
    ';
?>