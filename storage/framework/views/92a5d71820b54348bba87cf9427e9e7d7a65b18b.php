<?php $__env->startSection('styles'); ?>

    <!-- INTERNAL Bootstrap-Timepicker css -->
    <link href="<?php echo e(URL::asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.css')); ?>" rel="stylesheet" />

    <!-- INTERNAL Colorpicker css -->
    <link href="<?php echo e(URL::asset('assets/plugins/spectrum-colorpicker/spectrum-colorpicker.css')); ?>" rel="stylesheet"/>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Settings</h4>
        </div>
        <div class="page-rightheader ml-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                <div class="btn-list">
                    <button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12 col-xl-3">
            <div class="card">
                <div class="nav flex-column admisetting-tabs" id="settings-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" data-toggle="pill" href="#tab-1" role="tab">
                        <i class="nav-icon las la-cog"></i> General Settings
                    </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab-2" role="tab">
                        <i class="nav-icon las la-user-circle"></i> Profile Settings
                    </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab-3" role="tab">
                        <i class="nav-icon las la-bell"></i> Notification Settings
                    </a>
                    <a class="nav-link" data-toggle="pill" href="#tab-4" role="tab">
                        <i class="nav-icon las la-edit"></i> Attendance Settings
                    </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab-5" role="tab">
                        <i class="nav-icon las la-palette"></i> Theme Settings
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-9">
            <div class="tab-content adminsetting-content" id="setting-tabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                    <div class="card">
                        <div class="card-header  border-0">
                            <h4 class="card-title">General Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Company Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="Spruko Technologies Pvt Ltd">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Company Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="spruko@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Company Address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea rows="2" class="form-control" placeholder="something text here...">NO.1-8-67, LIG 215,H, 83, near Tulasi Hospital ECIL, APIIC Colony, Kushaiguda, Hyderabad, Telangana 500062</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="+9960332258">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Website</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="www.spruko.com">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Contact Person</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="HR Admin">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Upload Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group file-browser">
                                            <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly value="images/brand/favicon.png">
                                            <label class="input-group-append mb-0">
																	<span class="btn ripple btn-primary">
																		Browse <input type="file" class="file-browserinput"  style="display: none;" multiple>
																	</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Country</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select select2"  data-placeholder="Select Country">
                                            <option label="Select Country"></option>
                                            <option value="1">Germany</option>
                                            <option value="3">Canada</option>
                                            <option value="4" selected>Usa</option>
                                            <option value="5">Afghanistan</option>
                                            <option value="6">Albania</option>
                                            <option value="7">China</option>
                                            <option value="8">Denmark</option>
                                            <option value="9">Finland</option>
                                            <option value="10">India</option>
                                            <option value="11">Kiribati</option>
                                            <option value="12">Kuwait</option>
                                            <option value="13">Mexico</option>
                                            <option value="14">Pakistan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Language</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select data-placeholder="Choose a Language..." class="form-control select2-show-search custom-select languages">
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
                                            <option value="UR">Urdu</option>
                                            <option value="UZ">Uzbek</option>
                                            <option value="VI">Vietnamese</option>
                                            <option value="CY">Welsh</option>
                                            <option value="XH">Xhosa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Currency</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select data-placeholder="Choose Currency" class="form-control select2 custom-select">
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
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Save Changes</a>
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                    <div class="card">
                        <div class="card-header  border-0">
                            <h4 class="card-title">Profile Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="HR Admin">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="login email" value="hr@demo.com">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" placeholder="password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Confirm Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" placeholder="Confirm password" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Save Changes</a>
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                    <div class="card">
                        <div class="card-header  border-0">
                            <h4 class="card-title">Notification Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Attendance</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Awards</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Leaves</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Notice Board</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Expenses</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Payroll</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Events</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Save Changes</a>
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4" role="tabpanel">
                    <div class="card">
                        <div class="card-header  border-0">
                            <h4 class="card-title">Attendance Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Office Start Time</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input class="form-control timepicker" placeholder="HH:MM AM/PM" type="text">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="feather feather-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Office End Time</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input class="form-control timepicker" placeholder="HH:MM AM/PM" type="text">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="feather feather-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Employees Mark Attendance</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox"  class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Late Mark after(mintues)</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Enter mintues" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Office Opens On</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input"  name="example-radios3" value="option1">
                                                        <span class="custom-control-label">Monday</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input"  name="example-radios3" value="option2">
                                                        <span class="custom-control-label">Tuesday</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input"  name="example-radios3" value="option3" >
                                                        <span class="custom-control-label">Wednesday</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input"  name="example-radios3" value="option4">
                                                        <span class="custom-control-label">Thursday</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input"  name="example-radios3" value="option5">
                                                        <span class="custom-control-label">Friday</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input"  name="example-radios3" value="option6">
                                                        <span class="custom-control-label">Saturday</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio mr-4">
                                                        <input type="radio" class="custom-control-input"  name="example-radios3" value="option7">
                                                        <span class="custom-control-label">Sunday</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Save Changes</a>
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-5" role="tabpanel">
                    <div class="card">
                        <div class="card-header  border-0">
                            <h4 class="card-title">Theme Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Theme Color</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input id="showAlpha" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Text Color</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input id="colorpicker" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Save Changes</a>
                            <a href="#" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

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

    <!--Add New Event Modal -->
    <div class="modal fade"  id="eventmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Event</h5>
                    <button  class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Event Title</label>
                        <input type="password" class="form-control" placeholder="text" value="">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Event Date:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="feather feather-calendar"></i>
                                </div>
                            </div><input class="form-control fc-datepicker"  placeholder="DD-MM-YYYY"  type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Event Description</label>
                        <textarea class="form-control" rows="3">Some text here...</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add New Event Modal  -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- INTERNAL Data tables -->
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/modal-datepicker/datepicker.js')); ?>"></script>

    <!-- INTERNAL Bootstrap-Timepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js')); ?>"></script>

    <!-- INTERNAL Colorpicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/spectrum-colorpicker/spectrum-colorpicker.js')); ?>"></script>

    <!-- INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('assets/js/hr/hr-settings.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views\common_pages\hrm\hr-settings.blade.php ENDPATH**/ ?>