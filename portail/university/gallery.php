<?php include('head.php');?>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />

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
    
    <!-- Start Main leftbar navigation -->
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
                        <h1 class="page-title">Gallerie</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">HEC Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallerie</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <!-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Gallery-all">All</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Gallery-Social">Social Media</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Gallery-Package">Package</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Gallery-News">News</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
               
                <div class="tab-content">
                    <div class="tab-pane active" id="Gallery-all">
                        <div class="row row-cards">
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/1.jpg" alt="Photo by Nathan Guerrero" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div>
                                            <div>Nathan</div>
                                            <small class="d-block text-muted">12 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 112</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 42</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/3.jpg" alt="Photo by Rose Bradley" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div>
                                            <div>Rose</div>
                                            <small class="d-block text-muted">4 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 166</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 96</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                           
                            
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/9.jpg" alt="Photo by Jack Ruiz" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div>
                                            <div>Jack</div>
                                            <small class="d-block text-muted">15 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 143</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 73</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/10.jpg" alt="Photo by Ronald Bradley" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div>
                                            <div>Ronald</div>
                                            <small class="d-block text-muted">11 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 149</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 79</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/11.jpg" alt="Photo by Kathleen Harper" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div>
                                            <div>Kathleen</div>
                                            <small class="d-block text-muted">16 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 164</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 94</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/12.jpg" alt="Photo by Bobby Knight" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div>
                                            <div>Bobby</div>
                                            <small class="d-block text-muted">6 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 160</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 90</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="tab-pane" id="Gallery-News">
                        <div class="row row-cards">
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/4.jpg" alt="Photo by Peter Richards" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div>
                                            <div>Peter</div>
                                            <small class="d-block text-muted">18 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 76</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 6</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/10.jpg" alt="Photo by Ronald Bradley" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div>
                                            <div>Ronald</div>
                                            <small class="d-block text-muted">11 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 149</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 79</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/11.jpg" alt="Photo by Kathleen Harper" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div>
                                            <div>Kathleen</div>
                                            <small class="d-block text-muted">16 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 164</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 94</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="card p-3">
                                    <a href="javascript:void(0)" class="mb-3">
                                        <img src="../assets/images/gallery/12.jpg" alt="Photo by Bobby Knight" class="rounded">
                                    </a>
                                    <div class="d-flex align-items-center px-2">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div>
                                            <div>Bobby</div>
                                            <small class="d-block text-muted">6 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon"><i class="fe fe-eye mr-1"></i> 160</a>
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 90</a>
                                        </div>
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
                            Copyright © 2021 <a href="#">Orion soft CIV</a>.
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
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/plugins/dropify/js/dropify.min.js"></script>
<script src="../assets/bundles/summernote.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
<script src="assets/js/form/dropify.js"></script>
<script src="assets/js/page/summernote.js"></script>
</body>
</html>
