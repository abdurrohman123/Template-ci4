
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="thema bootstrap template, thema admin, bootstrap, admin template, bootstrap admin">
    <meta name="author" content="LanceCoder">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?= base_url() ?>/template/assets/css/global-plugins.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/vendors/jquery-icheck/skins/all.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/template/assets/css/theme.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>/template/assets/css/class-helpers.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>/template/assets/css/colors/green.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/turquoise.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/blue.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/amethyst.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/cloud.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/sun-flower.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/carrot.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/alizarin.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/concrete.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/css/colors/wet-asphalt.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/fonts/Indie-Flower/indie-flower.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/template/assets/fonts/Open-Sans/open-sans.css?family=Open+Sans:300,400,700" rel="stylesheet" />
    <link href="<?= base_url() ?>/template/assets/css/table-responsive.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>/template/assets/vendors/datatable/bootstrap/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body id="default-scheme">

    <!--======== Start Style Switcher ========-->    
    <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
    <div class="style-switcher">
        <div class="style-swticher-header">
            <div class="style-switcher-heading fg-white">Color Switcher</div>            
            <div class="theme-close"><i class="icon-close"></i></div>
        </div>

        <div class="style-swticher-body">
            <ul class="list-unstyled">
                <li class="theme-default theme-active" data-style="default"></li>
                <li class="theme-turquoise" data-style="turquoise"></li>
                <li class="theme-blue" data-style="blue"></li>
                <li class="theme-amethyst" data-style="amethyst"></li>
                <li class="theme-cloud" data-style="cloud"></li>
                <li class="theme-sun-flower" data-style="sun-flower"></li>
                <li class="theme-carrot" data-style="carrot"></li>
                <li class="theme-alizarin" data-style="alizarin"></li>
                <li class="theme-concrete" data-style="concrete"></li>
                <li class="theme-wet-ashphalt" data-style="wet-ashphalt"></li>
            </ul>         
        </div>
    </div><!--/style-switcher-->
    <!--======== End Style Switcher ========-->

    <section id="container">

        <!--header start-->
        <header class="header fixed-top clearfix">

            <div class="brand">

                <a href="../index.html" class="logo">
                PGT Data Master
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
                </div>
            <div class="top-nav">

                <ul class="nav navbar-nav navbar-right">
                    <li class="search-box">
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="../../../assets/images/profile.jpg" alt="image">John Doe
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu animated fadeInUp pull-right">
                            <li>
                                <a href="../app-pages/page-profile-dashboard.html" class="hvr-bounce-to-right">  Profile</a>
                            </li>
                            <li>
                                <a href="../app-pages/page-profile-settings.html" class="hvr-bounce-to-right">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="hvr-bounce-to-right">Help</a>
                            </li>
                            <li><a href="../app-pages/page-login-2.html" class="hvr-bounce-to-right"><i class=" icon-login pull-right"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </header>    
        <aside>
            <div id="sidebar" class="nav-collapse md-box-shadowed">
                <!-- sidebar menu start-->
                <div class="leftside-navigation leftside-navigation-scroll">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li class="sidebar-profile">
                            
                            <div class="profile-options-container">
                                <p class="text-right profile-options"><span class="profile-options-close pe-7s-close fa-2x font-bold"></span></p>

                                <div class="profile-options-list animated zoomIn">
                                    <p><a href="app-pages/page-profile-dashboard.html">Profile</a></p>
                                    <p><a href="app-pages/page-profile-settings.html">Settings</a></p>
                                    <p><a href="javascript:void(0)">Help</a></p>
                                    <p><a href="app-pages/page-login-2.html">Log Out</a></p>
                                </div>
                                
                            </div>
                            
                            <div class="profile-main">
                                <p class="text-right profile-options"><i class="profile-options-open icon-options-vertical fa-2x"></i></p>
                                <p class="image">
                                    <img alt="image" src="<?= base_url() ?>/template/assets/images/profile-md.jpg" width="80">
                                    <span class="status"><i class="fa fa-circle text-success"></i></span>
                                </p>
                                <p>
                                    <span class="name">Abdurrohman Muthi</span><br>
                                    <span class="position" style="font-family: monospace;">Admin PGT</span>
                                </p>
                            </div>

                        </li>
                        <li class='../index.html'><a href="#" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar icon-home fa-2x'></span><span>Dashboard</span></a></li>
                        <li class='sub-menu '><a href="1" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar pe-7s-display2 fa-2x'></span><span>Data Master</span></a>
                            <ul class='sub'>
                                <li><a href='#'>Data Proses</a>
                                </li>
                                <li><a href='ui-admin/hovercss.html'>Database PGT</a>
                                </li>
                               
                            </ul>
                        </li>
                    </ul>        
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>    
     <section id="main-content">
        <section class="wrapper">

                          
        <div class="top-page-header">
                    <!-- ISI KONTEN -->
            <div class="row">
                <div class="col-md-12">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </div>           
    </div>

</div>

   
        </section>
     </section>
        <aside>
            <div id="right-sidebar" class="right-sidebar-notifcations nav-collapse hide-right-bar-notifications">
                <div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">
                    <ul id="right-sidebar-tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#activities" id="activities-tab" role="tab" data-toggle="tab" aria-controls="activities" aria-expanded="true">Activities</a>
                        </li>
                        <li role="presentation">
                            <a href="#tasks" role="tab" id="tasks-tab" data-toggle="tab" aria-controls="tasks">Tasks</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" role="tab" id="settings-tab" data-toggle="tab" aria-controls="settings">Settings</a>
                        </li>
                        
                    </ul>
                    <div id="right-sidebar-tab-content" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="activities" aria-labelledBy="activities-tab">
                            <div class="right-sidebar-panel-content-heading">
                                <h4><span class="icon-user"></span> Latest user activities</h4>
                                <small>10 Latest Activities</small>
                            </div>
                            <div class="right-sidebar-panel-content animated fadeInRight">
                                
                                <ul class="right-sidebar-list">
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image" />
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - User Login...</h5>
                                            <p>Accessing the system...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img3.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating...</h5>
                                            <p>Updating user ID 1 ...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img2.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting...</h5>
                                            <p>Deleting user message...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img5.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Accessing...</h5>
                                            <p>User accessing the sys...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Viewing...</h5>
                                            <p>Viewing the user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Reading...</h5>
                                            <p>Reading user message...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Registering...</h5>
                                            <p>Registering new user...</p>
                                        </div>
                                    </li>
                                    
                                </ul>    

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tasks" aria-labelledBy="tasks-tab">
                            <div class="right-sidebar-panel-content-heading">
                                <h4><span class="icon-list"></span> Recent tasks</h4>
                                <small>15 Ongoing tasks</small>
                            </div>
                            <div class="right-sidebar-panel-content animated fadeInRight">
                                
                                <ul class="right-sidebar-list">
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5><a href="#">John Doe - Creating Tasks</a></h5>
                                            <p>To update the sidebar...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img2.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img3.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img4.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img5.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/users/img4.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Updating Tasks</h5>
                                            <p>To update the header UI...</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pull-left thumbnail-hover">
                                            <div class="overflow-hidden">
                                                <img src="../../../assets/images/profile.jpg" width="80" alt="image"/>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>John Doe - Deleting Tasks</h5>
                                            <p>Change the content UI...</p>
                                        </div>
                                    </li>
                                    
                                </ul>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings" aria-labelledBy="settings-tab">
                            <div class="right-sidebar-panel-content-heading">
                                <h4><span class="icon-list"></span> System Settins</h4>
                                <small>80% Completed Settings</small>
                            </div>
                            <div class="right-sidebar-panel-content animated fadeInRight">
                                <ul class="right-sidebar-list">
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox" checked="">
                                            <i data-on="YES" data-off="NO"></i> Email Notifications
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> Daily Email Notifiactions
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox" checked="">
                                            <i data-on="YES" data-off="NO"></i> Show user visitors
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox" checked="">
                                            <i data-on="YES" data-off="NO"></i> Show birthdate
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> Show address
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> Payment Recurring
                                        </label>
                                    </li>
                                    <li>
                                        <label class="switch-input success">
                                            <input type="checkbox" name="switch-checkbox">
                                            <i data-on="YES" data-off="NO"></i> SMS Notifications
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /example -->
                <div class="btn-bottom-right-sidebar-close">
                    <span class="fa fa-times"></span>
                </div>
                    
            </div>
        </aside>    
        <!--===== Right sidebar nofications end ========-->

    </section><!--/.container-->
<script src="<?= base_url() ?>/template/assets/js/global-plugins.js"></script>
<script src="<?= base_url() ?>/template/assets/js/theme.js" type="text/javascript" ></script>
<script src="<?= base_url() ?>/template/assets/js/tables.js"></script>
<script src="<?= base_url() ?>/template/assets/js/table_editable.js"></script>

<script type="text/javascript">


    $(document).ready(function(){
        new WOW().init();

        App.initPage();
        App.initLeftSideBar();
        App.initCounter();
        App.initNiceScroll();
        App.initPanels();
        App.initProgressBar();
        App.initSlimScroll();
        App.initNotific8();
        App.initTooltipster();
        App.initStyleSwitcher();
        App.initMenuSelected();
        App.initRightSideBar();
        App.initSummernote();
        App.initAccordion();
        App.initModal();
        App.initPopover();

    });
</script>


</body>

</html>

<!--===== Footer End ========-->