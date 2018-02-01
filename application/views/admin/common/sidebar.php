<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo base_url('admin/dashboard');?>">ADMIN CONTROL PANEL</a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="../../images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('name');?></div>
                <div class="email"><?php echo $this->session->userdata('email');?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo base_url('admin/logout');?>"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="javascript:void(0)" class="menu-toggle">
                        <span class="glyphicon glyphicon-tags"></span>
                        <span>Category Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/dashboard');?>">View Categories</a></li>
                        <li><a href="<?php echo base_url('admin/newcategory'); ?>">Add New Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-tasks"></span>
                        <span>Course Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/courses');?>">View Courses</a></li>
                        <li><a href="<?php echo base_url('admin/newcourse'); ?>">Add New Course</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-equalizer"></span>
                        <span>Tutor Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/users/1');?>">View Tutors</a></li>
                        <li><a href="<?php echo base_url('admin/newuser/1'); ?>">Add New Tutor</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-user"></span>
                        <span>Student Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/users/2');?>">View Students</a></li>
                        <li><a href="<?php echo base_url('admin/newuser/2'); ?>">Add New Student</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-book"></span>
                        <span>Content Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/pages');?>">View Pages</a></li>
                        <li><a href="<?php echo base_url('admin/newpage'); ?>">Add New Page</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-asterisk"></span>
                        <span>Question Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/questions');?>">View Questions</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-plus"></span>
                        <span>Subscription Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/subscriptions');?>">View Subscription</a></li>
                        <li><a href="<?php echo base_url('admin/newsubscription'); ?>">Add New Subscription</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-plus"></span>
                        <span>Tutor Categories</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/showTutorCategories');?>">Tutor Categories</a></li>
                        <li><a href="<?php echo base_url('admin/addTutorCategories'); ?>"> Add New Categories  </a></li>
                    </ul>
                </li>

                 <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-plus"></span>
                        <span>Tutor Course</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/showTutorCourse');?>">Tutor Course</a></li>
                        <li><a href="<?php echo base_url('admin/addTutorCourse'); ?>"> Add New Course  </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span class="glyphicon glyphicon-plus"></span>
                        <span>Tutor Subject Meterial</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="<?php echo base_url('admin/');?>">Tutor Subject Meterial</a></li>
                        <li><a href="<?php echo base_url('admin/addTutorMaterial'); ?>">Add Tutor  Meterial  </a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; <?php echo date('Y');?> <a href="javascript:void(0);">Admin Control Panel</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.4
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
