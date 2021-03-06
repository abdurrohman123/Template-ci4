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
                                    <span class="name">Abdurrohman Muthi</span><br>
                                    <span class="position" style="font-family: monospace;">Admin PGT</span>
                                </p>
                            </div>

                        </li>
                        <li class='../index.html'><a href="dashboard.php" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar icon-home fa-2x'></span><span>Dashboard</span></a></li>
                        <li class='sub-menu '><a href="1" class="hvr-bounce-to-right-sidebar-parent"><span class='icon-sidebar pe-7s-display2 fa-2x'></span><span>Data Master</span></a>
                            <ul class='sub'>
                                <li><a href='dataproses.php'>Data Proses</a>
                                </li>
                                <li><a href='datapenataan.php'>Data Penataan</a>
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
                              
        <div class="top-page-header">
            <div class="row">


            
            <div class="c_title">
            <h2>Form Data Penataan PGT</h2>
            <div class="clearfix"></div>
            </div><!--/.c_title-->
          

                                <form class="validator form-horizontal " id="signupForm" method="get" action="#">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Nama Pemohon</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="firstname" name="firstname" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="#" class="control-label col-lg-3">Letak Tanah</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="#" name="#" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="#" class="control-label col-lg-3">Luas</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="#" name="#" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="#" class="control-label col-lg-3">Nomor</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="#" name="#" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="#" class="control-label col-lg-3">Data Scan</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="#" name="#" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="#" class="control-label col-lg-3">Lemari</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="#" name="#" type="text" />
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="#" class="control-label col-lg-3">Kode Box</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="#" name="#" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary btn-flat" type="submit">Save</button>
                                            <button class="btn btn-default btn-flat" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>


            <div class="c_title">
            <h2>Data Master Penataan PGT</h2>
            <div class="clearfix"></div>
            </div><!--/.c_title-->
            <div class="c_content">
                 <table id="example" class="table table-striped table-bordered" style="border-spacing:0px; width:100%">
                    <thead>
                    <tr>
                        <th>Nama Pemohon</th>
                        <th>Letak Tanah</th>
                        <th>Luas</th>
                        <th>Nomor</th>
                        <th>Data Scan</th>
                        <th>Lemari</th>
                        <th>Kode Box</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                     <tbody>
                        <tr>
                        <td>IMAM WINARYA</td>
                        <td>Kp.Baros RT.01/02, Baros, Baros, Kota Sukabumi</td>
                        <td>275m2</td>
                        <td>49/PTPGT/VII/2020 TANGGAL 09/JULI/2020</td>
                        <td>#</td>
                        <td>1</td>
                        <td>A</td>
                        <td class="text-center"><a class="edit btn btn-sm btn-default btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-pencil-square-o"></i></a>  <a class="delete btn btn-sm btn-danger btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-trash"></i></a>
                        </tr>
                         <tr>
                        <td>DJAKA PERMANA</td>
                        <td>Kp.Lembursitu RT.002/001, Karamat, Gunung Puyuh, Kota Sukabumi</td>
                        <td>200m2</td>
                        <td>50/PTPGT/VII/2020 TANGGAL 10/AGUSTUS/2020</td>
                        <td>#</td>
                        <td>1</td>
                        <td>A</td>
                        <td class="text-center"><a class="edit btn btn-sm btn-default btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-pencil-square-o"></i></a>  <a class="delete btn btn-sm btn-danger btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-trash"></i></a>
                        </tr>
                        <tr>
                        <td>AHMAD SULAEMAN</td>
                        <td>Kp.Kebonjati RT.001/005, Kebonjati, Cikole, Kota Sukabumi</td>
                        <td>380m2</td>
                        <td>51/PTPGT/VII/2020 TANGGAL 20/SEPTEMBER/2020</td>
                        <td>#</td>
                        <td>1</td>
                        <td>B</td>
                        <td class="text-center"><a class="edit btn btn-sm btn-default btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-pencil-square-o"></i></a>  <a class="delete btn btn-sm btn-danger btn-raised rippler rippler-inverse" href="javascript:;"><i class="fa fa-trash"></i></a>
                         </tr>
                      </tbody>
                </table>
            </div>
            </div>
        </div>
    </section> 
</section>  