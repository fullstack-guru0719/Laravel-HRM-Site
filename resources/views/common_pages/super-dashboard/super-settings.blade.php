@extends('layouts.app')

@section('styles')

    <!-- Notifications  Css -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />

    <!-- INTERNAL Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />

    <!-- INTERNAL Datepicker css-->
    <link href="{{URL::asset('assets/plugins/modal-datepicker/datepicker.css')}}" rel="stylesheet" />

@endsection

@section('content')

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

    <!-- Row-->
    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="nav flex-column admisetting-tabs" id="settings-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" data-toggle="pill" href="#tab-1" role="tab">
                        <i class="nav-icon las la-cog"></i> General Settings
                    </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab-2" role="tab">
                        <i class="nav-icon las la-envelope"></i> Email Settings
                    </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab-3" role="tab">
                        <i class="nav-icon lar la-credit-card"></i> Payment Settings
                    </a>
                    <a class="nav-link" data-toggle="pill" href="#tab-4" role="tab">
                        <i class="nav-icon las la-lock"></i> Security Settings
                    </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab-5" role="tab">
                        <i class="nav-icon las la-share-alt"></i> Social Settings
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-9">
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
                                        <label class="form-label mb-0 mt-2">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="dayone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Name" value="spruko@gmail.com">
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
                                        <label class="form-label mb-0 mt-2">Change Language</label>
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
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">Address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea rows="2" class="form-control" placeholder="something text here...">NO.1-8-67, LIG 215,H, 83, near Tulasi Hospital ECIL, APIIC Colony, Kushaiguda, Hyderabad, Telangana 500062</textarea>
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
                            <h4 class="card-title">Email Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Email Drivers</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="custom-controls-stacked d-sm-flex">
                                            <label class="custom-control custom-radio mr-4">
                                                <input type="radio" class="custom-control-input" id="email" name="example-radios3" value="option1" checked>
                                                <span class="custom-control-label">Mail</span>
                                            </label>
                                            <label class="custom-control custom-radio mr-4">
                                                <input type="radio" class="custom-control-input" id="email-smtp" name="example-radios3" value="option2">
                                                <span class="custom-control-label">SMTP</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="enable-smtpemail">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Host</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="host" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Port</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="port" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">User Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="User" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="Password" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Encryption</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="encryption" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">From Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="dayone" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label mb-0 mt-2">From Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="example@gmail.com" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success">Save Changes</a>
                            <a href="#" class="btn btn-danger">Cancel</a>
                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#sendmailmodal">Send Test Email</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                    <div class="card">
                        <div class="card-header  border-0">
                            <h4 class="card-title">Payment Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <label class="form-label">Paypal</label>
                                    </div>
                                    <div class="col-xl-2 pr-0">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox" id="paypal" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                    <div class="col-xl-7 pl-xl-0">
                                        <span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="open-paypal">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <label class="form-label">Test Mode</label>
                                        </div>
                                        <div class="col-xl-2 pr-0">
                                            <label class="custom-switch">
                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">Enable/Disable</span>
                                            </label>
                                        </div>
                                        <div class="col-xl-7 pl-xl-0">
                                            <span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Client ID</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Client ID" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-label mb-0 mt-2">Secret</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Secret" value="">
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
                            <h4 class="card-title">Security Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <label class="form-label">Email Verification</label>
                                    </div>
                                    <div class="col-xl-2 pr-0">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                    <div class="col-xl-7 pl-xl-0">
                                        <span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <label class="form-label">App Update</label>
                                    </div>
                                    <div class="col-xl-2 pr-0">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                    <div class="col-xl-7 pl-xl-0">
                                        <span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <label class="form-label">App Debug</label>
                                    </div>
                                    <div class="col-xl-2 pr-0">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                    <div class="col-xl-7 pl-xl-0">
                                        <span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <label class="form-label">Register</label>
                                    </div>
                                    <div class="col-xl-2 pr-0">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                    <div class="col-xl-7 pl-xl-0">
                                        <span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <label class="form-label">Google Captcha</label>
                                    </div>
                                    <div class="col-xl-2 pr-0">
                                        <label class="custom-switch">
                                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" >
                                            <span class="custom-switch-indicator"></span>
                                            <span class="custom-switch-description">Enable/Disable</span>
                                        </label>
                                    </div>
                                    <div class="col-xl-7 pl-xl-0">
                                        <span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
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
                            <h4 class="card-title">Social Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card border">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">Google Login</h4>
                                            <div class="card-options">
                                                <label class="custom-switch">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="form-label">Callback URL <span class="clipboard-icon" data-clipboard-target="#social1"><i class="las la-clipboard"></i></span></label>
                                                <div class="bg-white border br-7" id="social1">
                                                    <div class="p-3">
                                                        <span>https://www.doamin.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Client ID</label>
                                                <textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Secret</label>
                                                <textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card border">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">Facebook Login</h4>
                                            <div class="card-options">
                                                <label class="custom-switch">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="form-label">Callback URL <span class="clipboard-icon" data-clipboard-target="#social2"><i class="las la-clipboard"></i></span></label>
                                                <div class="bg-white border br-7" id="social2">
                                                    <div class="p-3">
                                                        <span>https://www.doamin.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Client ID</label>
                                                <textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Secret</label>
                                                <textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
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
            </div>
        </div>
    </div>
    <!-- End Row-->

@endsection('content')

@section('modals')

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

@endsection('modals')

@section('scripts')

    <!-- Notifications js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>

    <!-- INTERNAL Datepicker js -->
    <script src="{{URL::asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

    <!-- INTERNAL Clipbaord js -->
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

    <!-- INTERNAL Index js-->
    <script src="{{URL::asset('assets/js/superadmin/superadmin-settings.js')}}"></script>

@endsection
