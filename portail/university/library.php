<?php include('head.php');?>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/plugins/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">

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
                        <h1 class="page-title">Library</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Library-all">List View</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Library-add">Add</a></li>
                        <li class="nav-item"><a class="nav-link" id="Library-tab-Boot" data-toggle="tab" href="#Library-add-Boot">Add Bootstrap Style</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Library-all">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-striped table_custom border-style spacing5">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Subject</th>
                                                <th>Department</th>
                                                <th>Year</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Management Basics</td>
                                                <td>Designing</td>
                                                <td>Architecture</td>
                                                <td>Second Year</td>
                                                <td>CD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Java Black Book</td>
                                                <td>Graphics</td>
                                                <td>MBA</td>
                                                <td>Third Year</td>
                                                <td>DVD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Parallel Computing</td>
                                                <td>Politics</td>
                                                <td>Architecture</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Networking</td>
                                                <td>Computer</td>
                                                <td>MBA</td>
                                                <td>Last Year</td>
                                                <td>Newspaper</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Web Programming</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Third Year</td>
                                                <td>Book</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Designing</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Computer Engineering</td>
                                                <td>Second Year</td>
                                                <td>DVD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Computer Fundamental</td>
                                                <td>Animation</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>CD</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Time History</td>
                                                <td>Management</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Politics</td>
                                                <td>Designing</td>
                                                <td>Mechanical</td>
                                                <td>Second Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Designing</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Computer Engineering</td>
                                                <td>Second Year</td>
                                                <td>DVD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Computer Fundamental</td>
                                                <td>Animation</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>CD</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Time History</td>
                                                <td>Management</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Politics</td>
                                                <td>Designing</td>
                                                <td>Mechanical</td>
                                                <td>Second Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Library-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Library</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Subject" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Department" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Type" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Year" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Status" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg btn-simple">Add Library</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Library-add-Boot">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Library</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <form class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Title <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Subject  <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control input-height" name="sub">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Mathematics</option>
                                            <option value="Category 2">Science</option>
                                            <option value="Category 3">Software</option>
                                            <option value="Category 3">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Purchase Date <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Auther Name <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Publisher <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Price <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Department <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control input-height" name="departmnt">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Mathematics</option>
                                            <option value="Category 2">Engineering</option>
                                            <option value="Category 3">Science</option>
                                            <option value="Category 3">M.B.A.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Asset Type <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control input-height" name="assttype">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Book</option>
                                            <option value="Category 2">CD</option>
                                            <option value="Category 3">DVD</option>
                                            <option value="Category 3">NewsPaper</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Asset Details <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
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
                            Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
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
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/bundles/dataTables.bundle.js"></script>
<script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Start project main js  and page js -->
<script src="../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
<script src="assets/js/table/datatable.js"></script>
</body>
</html>
