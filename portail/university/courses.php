<?php include('head.php');?>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css">

<!-- Core css -->
<link rel="stylesheet" href="../assets/css/style.min.css"/>
</head>

<body class="font-muli theme-cyan gradient">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    <!-- Start Main top header -->
    <?php include('top-header.php');?>
    <!-- Start Rightbar setting panel -->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
            <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li> -->
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="azure"><div class="azure"></div></li>
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="white"><div class="bg-white"></div></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
                            <span class="custom-control-label">Muli Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient" checked="">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group">
                    <label class="d-block">Storage <span class="float-right">77%</span></label>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Start Theme panel do not add in project -->
    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Light Version</p>
                        <a href="../university/index.html"><img src="../assets/images/themes/default.png" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Dark Version</p>
                        <a href="../university-dark/index.html"><img src="../assets/images/themes/dark.png" class="img-fluid" alt="" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="../university-rtl/index.html"><img src="../assets/images/themes/rtl.png" class="img-fluid" alt="" /></a>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
    <!-- Start Quick menu with more functio -->
    <!-- Main leftbar navigation --> 
    <?php include('left-sidebar.php'); ?>
    
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <?php include('page-header.php'); ?>
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Mes cours</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">HEC abidjan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cours</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Courses-all">Mes cours</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Courses-add">Add</a></li>
                        <li class="nav-item"><a class="nav-link" id="Courses-tab-Boot" data-toggle="tab" href="#Courses-add-Boot">Add Bootstrap Style</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Courses-all">
                        <div class="row row-deck">
                
                        <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <a href="#"><img class="card-img-top" src="../assets/images/gallery/images.png" alt=""></a>
                                    <div class="card-body d-flex flex-column">
                                        <h5><a href="courses-details.html">Marketing Digital</a></h5>
                                        <!-- <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!</div> -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-vcenter mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                    <td class="tx-medium">Duration</td>
                                                    <td class="text-right">6 Months</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><i class="fa fa-users text-warning"></i></td>
                                                    <td class="tx-medium">Students</td>
                                                    <td class="text-right">125+</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card ribbon">
                                    <div class="ribbon-box orange"><i class="fa fa-star"></i></div>
                                    <a href="#"><img class="card-img-top" src="../assets/images/gallery/ai.webp" alt=""></a>
                                    <div class="card-body d-flex flex-column">
                                        <h5><a href="courses-details.html">Intelligence artificielle</a></h5>
                                        <!-- <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!</div> -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-vcenter mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                    <td class="tx-medium">Duration</td>
                                                    <td class="text-right">1 Year</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td><i class="fa fa-users text-warning"></i></td>
                                                    <td class="tx-medium">Students</td>
                                                    <td class="text-right">50+</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <a href="#"><img class="card-img-top" src="../assets/images/gallery/mobil.jpeg" alt=""></a>
                                    <div class="card-body d-flex flex-column">
                                        <h5><a href="courses-details.html">Programmation mobile</a></h5>
                                        <!-- <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!</div> -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-vcenter mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                    <td class="tx-medium">Duration</td>
                                                    <td class="text-right">6 Months</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><i class="fa fa-users text-warning"></i></td>
                                                    <td class="tx-medium">Students</td>
                                                    <td class="text-right">125+</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <a href="#"><img class="card-img-top" src="../assets/images/gallery/php.png" alt=""></a>
                                    <div class="card-body d-flex flex-column">
                                        <h5><a href="courses-details.html">PHP Development </a></h5>
                                        <!-- <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!</div> -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-vcenter mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                    <td class="tx-medium">Duration</td>
                                                    <td class="text-right">6 Months</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td><i class="fa fa-users text-warning"></i></td>
                                                    <td class="tx-medium">Students</td>
                                                    <td class="text-right">125+</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                    <a href="#"><img class="card-img-top" src="../assets/images/gallery/ux.jpg" alt=""></a>
                                    <div class="card-body d-flex flex-column">
                                        <h5><a href="courses-details.html">UI UX Design </a></h5>
                                        <!-- <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!</div> -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-vcenter mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                    <td class="tx-medium">Duration</td>
                                                    <td class="text-right">6 Months</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><i class="fa fa-users text-warning"></i></td>
                                                    <td class="tx-medium">Students</td>
                                                    <td class="text-right">125+</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center mt-auto">
                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Start main footer -->
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2019 <a href="#">Orion soft CIV</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>    
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
</body>
</html>
