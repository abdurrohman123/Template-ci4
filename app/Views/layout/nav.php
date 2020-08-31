  <!--sidebar start-->
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
                                    <span class="name">John Doe</span><br>
                                    <span class="position" style="font-family: monospace;">Administrator</span>
                                </p>
                            </div>

                        </li>
                        <li class='../index.html'><a href="#" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar icon-home fa-2x'></span><span>Dashboard</span></a></li>
                        <li class='sub-menu '><a href="1" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar pe-7s-display2 fa-2x'></span><span>UI Admin</span></a>
                            <ul class='sub'>
                                <li><a href='ui-admin/animatecss.html'>Animate CSS</a>
                                </li>
                                <li><a href='ui-admin/hovercss.html'>Hover CSS</a>
                                </li>
                                <li><a href='ui-admin/hover-ideas.html'>Hover Ideas</a>
                                </li>
                                <li><a href='ui-admin/icheck.html'>iCheck</a>
                                </li>
                                <li><a href='ui-admin/tooltipster.html'>Tooltipster</a>
                                </li>
                                <li><a href='ui-admin/sweetalert.html'>Sweet Alert</a>
                                </li>
                                <li><a href='ui-admin/counter.html'>Counter</a>
                                </li>
                                <li><a href='ui-admin/word-rotator.html'>Word Rotator</a>
                                </li>
                                <li><a href='ui-admin/wow-animations.html'>Wow animations</a>
                                </li>
                                <li><a href='ui-admin/owl-carousel.html'>Owl Carousel</a>
                                </li>
                                <li><a href='ui-admin/magnific-popup.html'>Magnific Popup</a>
                                </li>
                            </ul>
                        </li>
                    </ul>        
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>    
        <!--sidebar end-->

        <!-- /menu footer buttons -->
        
        <!--<div class="sidebar-footer hidden-small">
            <a class="tooltip-settings" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a class="tooltip-fullscreen" title="Full Screen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a class="tooltip-resize-fullscreen" title="Resize Screen" style='display:none'>
                <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
            </a>
            <a class="tooltip-lock" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a class="tooltip-logout" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>-->    
        <!-- /menu footer buttons -->

        <!--main content start-->
        <section id="main-content">

                
            <section class="wrapper">
                    
                <!--======== Grid Menu Start ========-->
                <div id="grid-menu">
                    <div class="color-overlay grid-menu-overlay">
                        <div class="grid-icon-wrap grid-icon-effect-8">
                            <a href="#" class="grid-icon icon-envelope font-size-50 turquoise"></a>
                            <a href="#" class="grid-icon icon-user font-size-50 teal"></a>
                            <a href="#" class="grid-icon icon-support font-size-50 peter-river"></a>
                            <a href="#" class="grid-icon icon-settings font-size-50 light-blue"></a>
                            <a href="#" class="grid-icon icon-picture font-size-50 orange"></a>
                            <a href="#" class="grid-icon icon-camrecorder font-size-50 light-orange"></a>
                        </div>
                    </div>
                    
                </div>                
                <!--======== Grid Menu End ========-->

                <!--======== Page Title and Breadcrumbs Start ========-->
               
<div class="top-page-header">
<div class="row">

    <div class="col-md-12">

    

        <div class="c_title">
            <h2>Basic bootstrap datable</h2>
            <ul class="nav navbar-right panel_options">
                <li>
                    <a class="full-screen">
                        <span class="icon-size-fullscreen"></span>
                    </a>
                </li>
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu bullet pull-right animated pulse" role="menu">
                        <li class="hvr-bounce-to-right-global-parent">
                            <a href="#">Settings 1</a>
                        </li>
                        <li class="hvr-bounce-to-right-global-parent">
                            <a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div><!--/.c_title-->

        <div class="c_content">
            
            <table id="example" class="table table-striped table-bordered" style="border-spacing:0px; width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
         
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
         
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                    </tr>
                    </tr>
                </tbody>
            </table>
            
            
        </div><!--/.c_content-->

   


    </div><!--/col-md-12-->

</div><!--/row-->
</div>

                <!--======== END BUG TRACKER FORM ========-->


            </section>
        </section>
        <!--======== Main Content End ========-->


        <!--===== Right sidebar nofications start ========-->
        <!--===== Right sidebar nofications end ========-->

    </section><!--/.container-->