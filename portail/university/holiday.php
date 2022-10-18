<?php include('head.php'); ?>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/plugins/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="../assets/plugins/sweetalert/sweetalert.css">

<!-- Core css -->
<link rel="stylesheet" href="../assets/css/style.min.css" />
</head>

<body class="font-muli theme-cyan gradient">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">
        <!-- Start Main top header -->
        <?php include('top-header.php'); ?>
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
                            <li data-theme="azure">
                                <div class="azure"></div>
                            </li>
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="cyan" class="active">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="white">
                                <div class="bg-white"></div>
                            </li>
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
                            <h1 class="page-title">Dates importantes</h1>
                            <ol class="breadcrumb page-breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Hec Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dates importantes</li>
                            </ol>
                        </div>
                        <ul class="nav nav-tabs page-header-tab">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Holiday-Calendar">Dates importantes</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Holiday-all">List</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Holiday-add">Add</a></li>
                        <li class="nav-item"><a class="nav-link" id="Holiday-tab-Boot" data-toggle="tab" href="#Holiday-add-Boot">Add Bootstrap Style</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-body mt-4">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane active" id="Holiday-Calendar">
                            <div class="card">
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Holiday-all">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Subject</th>
                                                    <th>Department</th>
                                                    <th>Year</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>New Year's Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>01 January 2019</td>
                                                    <td>03 January 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Memorial Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>29 May 2019</td>
                                                    <td>29 May 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Christmas Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>25 December 2019</td>
                                                    <td>03 January 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Annual Function</td>
                                                    <td>Holiday By Collage</td>
                                                    <td>01 March 2019</td>
                                                    <td>03 March 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>New Year's Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>01 January 2019</td>
                                                    <td>03 January 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Memorial Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>29 May 2019</td>
                                                    <td>29 May 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Christmas Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>25 December 2019</td>
                                                    <td>03 January 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Annual Function</td>
                                                    <td>Holiday By Collage</td>
                                                    <td>01 March 2019</td>
                                                    <td>03 March 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>New Year's Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>01 January 2019</td>
                                                    <td>03 January 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Memorial Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>29 May 2019</td>
                                                    <td>29 May 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Christmas Day</td>
                                                    <td>Public Holiday</td>
                                                    <td>25 December 2019</td>
                                                    <td>03 January 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Annual Function</td>
                                                    <td>Holiday By Collage</td>
                                                    <td>01 March 2019</td>
                                                    <td>03 March 2019</td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Holiday-add">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Add Holiday</h3>
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
                                                <input type="text" value="" placeholder="Holiday Type" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Holiday Start Date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Holiday End Date">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary btn-lg btn-simple">Add Holiday</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Holiday-add-Boot">
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
                                        <label class="col-md-3 col-form-label">Holiday Type <span class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <select class="form-control input-height" name="type">
                                                <option value="">Select...</option>
                                                <option value="Category 1">Public Holiday</option>
                                                <option value="Category 2">Holiday By University</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Holiday Start Date <span class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Holiday End Date <span class="text-danger">*</span></label>
                                        <div class="col-md-7">
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Holiday Details <span class="text-danger">*</span></label>
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
                                Copyright © 2021 <a href="#">Orion soft CIV</a>.
                            </div>
                            <div class="col-md-6 col-sm-12 text-md-right">
                                <ul class="list-inline mb-0">
                                    <!-- <li class="list-inline-item"><a href="../doc/index.html">Documentation</a></li> -->
                                    <!-- <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Add New Event popup -->
    <div class="modal fade" id="addNewEvent" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Ajouter</strong> un evenement</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Nom</label>
                                <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Tag</label>
                                <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">vert</option>
                                    <option value="danger">Rouge</option>
                                    <option value="info">vert clair</option>
                                    <option value="primary">bleue</option>
                                    <option value="warning">cyan</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Direct Event popup -->
    <div class="modal fade" id="addDirectEvent" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter un evenement</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" name="event-name" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Tag</label>
                                <select name="event-bg" class="form-control">
                                    <option value="success">vert</option>
                                    <option value="danger">Rouge</option>
                                    <option value="info">vert clair</option>
                                    <option value="primary">bleue</option>
                                    <option value="warning">cyan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn save-btn btn-success">Enregistrer</button>
                    <button class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Edit Modal popup -->
    <div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editer un evenement</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input class="form-control" name="event-name" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tag</label>
                                <select name="event-bg" class="form-control">
                                    <option value="success">vert</option>
                                    <option value="danger">Rouge</option>
                                    <option value="info">vert clair</option>
                                    <option value="primary">bleue</option>
                                    <option value="warning">cyan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn mr-auto delete-btn btn-danger">Supprimer</button>
                    <button class="btn save-btn btn-success">Enregistrer</button>
                    <button class="btn btn-default" data-dismiss="modal">fermer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Main project js, jQuery, Bootstrap -->
    <script src="../assets/bundles/lib.vendor.bundle.js"></script>

    <!-- Start Plugin Js -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/bundles/dataTables.bundle.js"></script>
    <script src="../assets/bundles/fullcalendar.bundle.js"></script>

    <!-- Start project main js  and page js -->
    <script src="../assets/js/core.js"></script>
    <script src="assets/js/page/dialogs.js"></script>
    <script src="assets/js/table/datatable.js"></script>
    <script src="assets/js/page/calendar.js"></script>
</body>

</html>