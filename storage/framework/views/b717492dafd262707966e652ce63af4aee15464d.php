<?php $__env->startSection('styles'); ?>

    <!-- Notifications  Css -->
    <link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Datepicker css-->
    <link href="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.css')); ?>" rel="stylesheet" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Companies</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#newcompanymodal"><i class="feather feather-plus fs-15 my-auto mr-2"></i>Add New Company</a>
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label class="form-label">Package</label>
                                <select  class="form-control custom-select select2" data-placeholder="Select Package">
                                    <option label="Select Package"></option>
                                    <option value="1">Free</option>
                                    <option value="2">Basic</option>
                                    <option value="3">Premium</option>
                                    <option value="4">Advanced</option>
                                    <option value="5">Enterprise</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-group">
                                <label class="form-label">Package Type:</label>
                                <select  class="form-control custom-select select2" data-placeholder="Select Package">
                                    <option label="Select Package"></option>
                                    <option value="1">Monthly</option>
                                    <option value="2">Yearly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="form-group mt-xl-5">
                                <a href="#" class="btn btn-primary btn-block">Search</a>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="form-group mt-xl-5">
                                <a href="#" class="btn btn-danger btn-block">Reset</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive company-table">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="company-list">
                            <thead>
                            <tr>
                                <th class="border-bottom-0 w-5">#NO</th>
                                <th class="border-bottom-0">Company Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Package</th>
                                <th class="border-bottom-0">Register Date</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#01</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img1.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">Abcd Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>abcd@gmail.com</td>
                                <td>
                                    <span class="fs-13">Basic (Monthly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>12-01-2021</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#02</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img2.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">Croport Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>corport@gmail.com</td>
                                <td>
                                    <span class="fs-13">Premium (Yearly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>5-02-2021</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#03</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img3.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">kolit Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>kolit@gmail.com</td>
                                <td>
                                    <span class="fs-13">Advanced (Monthly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>21-12-2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#04</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img4.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">Movck Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>movck@gmail.com</td>
                                <td>
                                    <span class="fs-13">Enterprise (Yearly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>21-09-2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#05</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img5.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">Loki Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>loki@gmail.com</td>
                                <td>
                                    <span class="fs-13">Basic (Monthly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>25-07-2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#06</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img6.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">frecho Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>frecho@gmail.com</td>
                                <td>
                                    <span class="fs-13">Premium (Yearly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>22-06-2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#07</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img7.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">Mooke Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>mooke@gmail.com</td>
                                <td>
                                    <span class="fs-13">Advanced (Monthly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>22-06-2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#08</td>
                                <td>
                                    <a href="#" class="d-flex sidebarmodal-collpase">
                                        <span class="avatar avatar-lg bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img8.png')); ?>)"></span>
                                        <div class="mt-0 mt-sm-4 d-block">
                                            <h6 class="mb-0 fs-16">Gomalik Pvt Ltd</h6>
                                        </div>
                                    </a>
                                </td>
                                <td>gomalik@gmail.com</td>
                                <td>
                                    <span class="fs-13">Enterprise (Yearly)</span>
                                    <a href="#" data-toggle="modal" data-target="#changepackgemodal">
                                        <span class="badge badge-primary fs-10 ml-2" data-toggle="tooltip" data-placement="top" title="Change">Change</span>
                                    </a>
                                </td>
                                <td>15-04-2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1 sidebarmodal-collpase" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="feather feather-eye text-primary"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="modal" data-target="#editmodal">
                                            <i class="feather feather-edit-2  text-success" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

    <!--Change password Modal -->
    <div class="modal fade"  id="changepasswordnmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" placeholder="password" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" placeholder="password" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Confirm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Change password Modal  -->

    <!--Add New Company Modal -->
    <div class="modal fade"  id="newcompanymodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Company</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Upload Company Logo</label>
                        <div class="input-group file-browser">
                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
                            <label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input class="form-control" placeholder="Name" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Email</label>
                                <input class="form-control" placeholder="Email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Ph:Number</label>
                                <input class="form-control" placeholder="Number" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Website</label>
                                <input class="form-control" placeholder="Website" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company Address</label>
                        <textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" value="">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Currency</label>
                                <select data-placeholder="Choose Currency" class="form-control custom-select select2">
                                    <option label="Choose Currency"></option>
                                    <option value="1">US DOllar(USD)</option>
                                    <option value="2">European Euro (EUR)</option>
                                    <option value="3">Japanese Yen (JPY)</option>
                                    <option value="4">British Pound (GBP)</option>
                                    <option value="5">Swiss Franc (CHF)</option>
                                    <option value="6">Canadian Dollar (CAD)</option>
                                    <option value="7">Australian/New Zealand Dollar (AUD/NZD)</option>
                                    <option value="8">South African Rand (ZAR)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Language</label>
                                <select data-placeholder="Choose a Language..." class="form-control select2 custom-select">
                                    <option label="Choose Language"></option>
                                    <option value="AF">Afrikanns</option>
                                    <option value="SQ">Albanian</option>
                                    <option value="AR">Arabic</option>
                                    <option value="HY">Armenian</option>
                                    <option value="EU">Basque</option>
                                    <option value="BN">Bengali</option>
                                    <option value="BG">Bulgarian</option>
                                    <option value="CA">Catalan</option>
                                    <option value="KM">Cambodian</option>
                                    <option value="ZH">Chinese (Mandarin)</option>
                                    <option value="HR">Croation</option>
                                    <option value="CS">Czech</option>
                                    <option value="DA">Danish</option>
                                    <option value="NL">Dutch</option>
                                    <option value="EN">English</option>
                                    <option value="ET">Estonian</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finnish</option>
                                    <option value="FR">French</option>
                                    <option value="KA">Georgian</option>
                                    <option value="DE">German</option>
                                    <option value="EL">Greek</option>
                                    <option value="GU">Gujarati</option>
                                    <option value="HE">Hebrew</option>
                                    <option value="HI">Hindi</option>
                                    <option value="HU">Hungarian</option>
                                    <option value="IS">Icelandic</option>
                                    <option value="ID">Indonesian</option>
                                    <option value="GA">Irish</option>
                                    <option value="IT">Italian</option>
                                    <option value="JA">Japanese</option>
                                    <option value="JW">Javanese</option>
                                    <option value="KO">Korean</option>
                                    <option value="LA">Latin</option>
                                    <option value="LV">Latvian</option>
                                    <option value="LT">Lithuanian</option>
                                    <option value="MK">Macedonian</option>
                                    <option value="MS">Malay</option>
                                    <option value="ML">Malayalam</option>
                                    <option value="MT">Maltese</option>
                                    <option value="MI">Maori</option>
                                    <option value="MR">Marathi</option>
                                    <option value="MN">Mongolian</option>
                                    <option value="NE">Nepali</option>
                                    <option value="NO">Norwegian</option>
                                    <option value="FA">Persian</option>
                                    <option value="PL">Polish</option>
                                    <option value="PT">Portuguese</option>
                                    <option value="PA">Punjabi</option>
                                    <option value="QU">Quechua</option>
                                    <option value="RO">Romanian</option>
                                    <option value="RU">Russian</option>
                                    <option value="SM">Samoan</option>
                                    <option value="SR">Serbian</option>
                                    <option value="SK">Slovak</option>
                                    <option value="SL">Slovenian</option>
                                    <option value="ES">Spanish</option>
                                    <option value="SW">Swahili</option>
                                    <option value="SV">Swedish </option>
                                    <option value="TA">Tamil</option>
                                    <option value="TT">Tatar</option>
                                    <option value="TE">Telugu</option>
                                    <option value="TH">Thai</option>
                                    <option value="BO">Tibetan</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TR">Turkish</option>
                                    <option value="UK">Ukranian</option>
                                    <option value="UR">Urdu</option>
                                    <option value="UZ">Uzbek</option>
                                    <option value="VI">Vietnamese</option>
                                    <option value="CY">Welsh</option>
                                    <option value="XH">Xhosa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="custom-controls-stacked d-md-flex">
                        <label class="form-label mt-1 mr-5">Status :</label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                            <span class="custom-control-label">Active</span>
                        </label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                            <span class="custom-control-label">InActive</span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-danger" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-success" onclick="not1()">Submit</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add New Company Modal  -->

    <!-- Edit Company Modal -->
    <div class="modal fade"  id="editmodal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Company</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Upload Company Logo</label>
                        <div class="input-group file-browser">
                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly value="abcd-logo.png">
                            <label class="input-group-append mb-0">
										<span class="btn ripple btn-primary">
											Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
										</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <input class="form-control" placeholder="Name" value="Abcd Pvt Ltd">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Email</label>
                                <input class="form-control" placeholder="Email" value="abcd@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Ph:Number</label>
                                <input class="form-control" placeholder="Number" value="+6325147890">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Company Website</label>
                                <input class="form-control" placeholder="Website" value="www.abcd.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company Address</label>
                        <textarea rows="2" class="form-control" placeholder="something text here...">4102 Masonic Hill Road Little Rock Arkansas-727212</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" value="abcd123">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Currency</label>
                                <select data-placeholder="Choose Currency" class="form-control custom-select select2">
                                    <option label="Choose Currency"></option>
                                    <option value="1" selected>US DOllar(USD)</option>
                                    <option value="2">European Euro (EUR)</option>
                                    <option value="3">Japanese Yen (JPY)</option>
                                    <option value="4">British Pound (GBP)</option>
                                    <option value="5">Swiss Franc (CHF)</option>
                                    <option value="6">Canadian Dollar (CAD)</option>
                                    <option value="7">Australian/New Zealand Dollar (AUD/NZD)</option>
                                    <option value="8">South African Rand (ZAR)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Language</label>
                                <select data-placeholder="Choose a Language..." class="form-control select2 custom-select">
                                    <option label="Choose Language"></option>
                                    <option value="AF">Afrikanns</option>
                                    <option value="SQ">Albanian</option>
                                    <option value="AR">Arabic</option>
                                    <option value="HY">Armenian</option>
                                    <option value="EU">Basque</option>
                                    <option value="BN">Bengali</option>
                                    <option value="BG">Bulgarian</option>
                                    <option value="CA">Catalan</option>
                                    <option value="KM">Cambodian</option>
                                    <option value="ZH">Chinese (Mandarin)</option>
                                    <option value="HR">Croation</option>
                                    <option value="CS">Czech</option>
                                    <option value="DA">Danish</option>
                                    <option value="NL">Dutch</option>
                                    <option value="EN" selected>English</option>
                                    <option value="ET">Estonian</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finnish</option>
                                    <option value="FR">French</option>
                                    <option value="KA">Georgian</option>
                                    <option value="DE">German</option>
                                    <option value="EL">Greek</option>
                                    <option value="GU">Gujarati</option>
                                    <option value="HE">Hebrew</option>
                                    <option value="HI">Hindi</option>
                                    <option value="HU">Hungarian</option>
                                    <option value="IS">Icelandic</option>
                                    <option value="ID">Indonesian</option>
                                    <option value="GA">Irish</option>
                                    <option value="IT">Italian</option>
                                    <option value="JA">Japanese</option>
                                    <option value="JW">Javanese</option>
                                    <option value="KO">Korean</option>
                                    <option value="LA">Latin</option>
                                    <option value="LV">Latvian</option>
                                    <option value="LT">Lithuanian</option>
                                    <option value="MK">Macedonian</option>
                                    <option value="MS">Malay</option>
                                    <option value="ML">Malayalam</option>
                                    <option value="MT">Maltese</option>
                                    <option value="MI">Maori</option>
                                    <option value="MR">Marathi</option>
                                    <option value="MN">Mongolian</option>
                                    <option value="NE">Nepali</option>
                                    <option value="NO">Norwegian</option>
                                    <option value="FA">Persian</option>
                                    <option value="PL">Polish</option>
                                    <option value="PT">Portuguese</option>
                                    <option value="PA">Punjabi</option>
                                    <option value="QU">Quechua</option>
                                    <option value="RO">Romanian</option>
                                    <option value="RU">Russian</option>
                                    <option value="SM">Samoan</option>
                                    <option value="SR">Serbian</option>
                                    <option value="SK">Slovak</option>
                                    <option value="SL">Slovenian</option>
                                    <option value="ES">Spanish</option>
                                    <option value="SW">Swahili</option>
                                    <option value="SV">Swedish </option>
                                    <option value="TA">Tamil</option>
                                    <option value="TT">Tatar</option>
                                    <option value="TE">Telugu</option>
                                    <option value="TH">Thai</option>
                                    <option value="BO">Tibetan</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TR">Turkish</option>
                                    <option value="UK">Ukranian</option>
                                    <option value="USA">USA</option>
                                    <option value="UR">Urdu</option>
                                    <option value="UZ">Uzbek</option>
                                    <option value="VI">Vietnamese</option>
                                    <option value="CY">Welsh</option>
                                    <option value="XH">Xhosa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="custom-controls-stacked d-md-flex">
                        <label class="form-label mt-1 mr-5">Status :</label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios1" value="option3" checked>
                            <span class="custom-control-label">Active</span>
                        </label>
                        <label class="custom-control custom-radio success mr-4">
                            <input type="radio" class="custom-control-input" name="example-radios1" value="option4">
                            <span class="custom-control-label">InActive</span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-danger" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-success" onclick="not2()">Updated</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Company Modal  -->

    <!--View Cpmpany Modal -->
    <div class="task-fade sidebar-modal">
        <div class="sidebar-dialog task-modal">
            <div class="sidebar-content">
                <div class="sidebar-header">
                    <div>
                        <h4 class="mb-0 mt-4">Company Details</h4>
                    </div>
                    <div class="ml-auto mt-3">
                        <a href="#" class="btn btn-success mr-2">Edit Company</a>
                        <a href="#" class="action-btns" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather feather-more-horizontal"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                            <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                            <li><a href="#"><i class="feather feather-send mr-2"></i>Send</a></li>
                            <li><a href="#"><i class="feather feather-edit-2 mr-2"></i>Edit</a></li>
                            <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                            <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                        </ul>
                        <a href="#" class="action-btns dismiss">
                            <i class="feather feather-x"></i>
                        </a>
                    </div>
                </div>
                <div class="row no-gutters border-bottom">
                    <div class="col-md-6 border-right">
                        <div class="card-body">
                            <div class="mb-5">
                                <span class="avatar avatar-xl bg-transparent brround mr-3" style="background-image: url(<?php echo e(URL::asset('assets/images/files/company/img1.png')); ?>)"></span>
                                <h6 class="mb-0 fs-18 mt-2">Abcd Pvt Ltd</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-4">
                                        <label class="form-label mb-0">Company Email:</label>
                                        <p class="text-muted">abcd@gmail.com</p>
                                    </div>
                                    <div class="mt-4">
                                        <label class="form-label mb-0">Company Website:</label>
                                        <p class="text-muted">www.abcd.com</p>
                                    </div>
                                    <div class="mt-4">
                                        <label class="form-label mb-0"> Currency:</label>
                                        <p class="text-muted">US DOllar(USD)</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-4">
                                        <label class="form-label mb-0">Company Number:</label>
                                        <p class="text-muted">+6325147890</p>
                                    </div>
                                    <div class="mt-4">
                                        <label class="form-label mb-0">Password:</label>
                                        <p class="text-muted">.......</p>
                                    </div>
                                    <div class="mt-4">
                                        <label class="form-label mb-0"> Language:</label>
                                        <p class="text-muted">English</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="form-label mb-0">Company Address:</label>
                                <p class="text-muted">4102 Masonic Hill Road Little Rock Arkansas-727212</p>
                            </div>
                            <div class="mt-4">
                                <label class="form-label mb-0">Status:</label>
                                <div class="mt-1"><span class="badge badge-success">Active</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="mb-4  font-weight-semibold">Package Details</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label class="form-label mb-0">Package Name</label>
                                        </td>
                                        <td>:</td>
                                        <td>Basic</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="form-label mb-0">Package Type</label>
                                        </td>
                                        <td>:</td>
                                        <td>Monthly</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="form-label mb-0">Price</label>
                                        </td>
                                        <td>:</td>
                                        <td>$98.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="form-label mb-0">Register Date</label>
                                        </td>
                                        <td>:</td>
                                        <td>12-01-2021</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="form-label mb-0">Licence Expires On</label>
                                        </td>
                                        <td>:</td>
                                        <td>12-02-2021</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View Company Modal  -->

    <!--Change Package Modal -->
    <div class="modal fade"  id="changepackgemodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Package</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Package</label>
                        <select  class="form-control custom-select select2" data-placeholder="Select Package">
                            <option label="Select Package"></option>
                            <option value="1">Free</option>
                            <option value="2">Basic</option>
                            <option value="3">Premium</option>
                            <option value="4">Advanced</option>
                            <option value="5">Enterprise</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Package Type</label>
                        <select  class="form-control custom-select select2" data-placeholder="Select Package">
                            <option label="Select Package"></option>
                            <option value="1">Monthly</option>
                            <option value="2">Yearly</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Amount</label>
                        <input class="form-control" placeholder="$0.00" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pay Date</label>
                        <div class="input-group">
                            <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="feather feather-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Next Pay Date</label>
                        <div class="input-group">
                            <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="feather feather-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Licence Expires On</label>
                        <div class="input-group">
                            <input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="feather feather-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-danger" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-success" onclick="not2()">Updated</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Change Package Modal  -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Notifications js -->
    <script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.rowGroup.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/superadmin/superadmin-company.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\super-dashboard\super-company.blade.php ENDPATH**/ ?>