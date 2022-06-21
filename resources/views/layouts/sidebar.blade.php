<!--aside open-->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{url('index')}} ">
            <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="HSWlogo">
            <img src="{{URL::asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="HSWlogo">
            <img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="HSWlogo">
            <img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="HSWlogo">
        </a>
    </div>
    <div class="app-sidebar3">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{URL::asset('assets/images/6.png')}}" alt="user-img" class="avatar-xxl rounded-circle mb-1">
                </div>
                <div class="user-info">
                    <h5 class=" mb-2">DMS-Admin</h5>
                    <span class="text-muted app-sidebar__user-name text-sm">Super Admin</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category mt-4">Dashboards</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i>
                </a>
            </li>


            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-user sidemenu_icon"></i>
                    <span class="side-menu__label">Minutes of Meeting</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    {{-- <li><a href="{{url('meeting/index')}}" class="slide-item">Dashboard</a></li> --}}
                    <li><a href="{{url('meeting/meeting-new')}}" class="slide-item">New Meeting</a></li>
                    <li><a href="{{url('meeting/meeting-list')}}" class="slide-item">Meeting List</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-briefcase sidemenu_icon"></i>
                    <span class="side-menu__label">Work Orders</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    {{-- <li><a href="{{url('workOrder/index')}}" class="slide-item">Dashboard</a></li> --}}
                    <li><a href="{{url('workOrder/workOrder-new')}}" class="slide-item">New Work Order</a></li>
                    <li><a href="{{url('workOrder/workOrder-list')}}" class="slide-item">Work Order List</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-clipboard sidemenu_icon"></i>
                    <span class="side-menu__label">Tasks</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    {{-- <li><a href="{{url('task/index')}}" class="slide-item">Dashboard</a></li> --}}
                    <li><a href="{{url('task/task-new')}}" class="slide-item">New Task</a></li>
                    <li><a href="{{url('task/task-list')}}" class="slide-item">Task List</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-book sidemenu_icon"></i>
                    <span class="side-menu__label">Projects</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    {{-- <li><a href="{{url('project/index')}} " class="slide-item">Dashboard</a></li> --}}
                    <li><a href="{{url('project/project-new')}} " class="slide-item">New Project</a></li>
                    <li><a href="{{url('project/project-list')}} " class="slide-item">Project List</a></li>
                </ul>
            </li>

            {{-- HRM Start --}}
{{--admin--}}
            @if(Illuminate\Support\Facades\Auth::user()->test_role=="admin")
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">HRM</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    {{-- <li><a href="{{url('hrm/index')}} " class="slide-item">Dashboard</a></li> --}}
                    <li><a href="{{url('hrm/department/index')}} " class="slide-item">Department</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Employees</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{url('hrm/employee/hr-emplist')}} ">Employees List</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/employee/hr-empview')}} ">View Employee</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/employee/hr-addemployee')}} ">Add Employee</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Time Attendance</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-face_att')}} ">Face_att_test</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-attlist')}} ">Attendance List</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-attuser')}} ">Attendance By User</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-attview')}} ">Attendance View</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-overviewcldr')}} ">Overview Calender</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-attmark')}} ">Attendance Mark </a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-leaves')}} ">Leave Settings</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-leavesapplication')}} ">Leave Applications</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/time-attendance/hr-recentleaves')}} ">Recent Leaves </a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('hrm/hr-award')}} " class="slide-item">Awards</a></li>
                    <li><a href="{{url('hrm/hr-notice')}} " class="slide-item">Notice Board</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Payroll</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="{{url('hrm/payroll/hr-empsalary')}} ">Employee Salary</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/payroll/hr-addpayroll')}} ">Add Payroll</a></li>
                            <li><a class="sub-slide-item" href="{{url('hrm/payroll/hr-editpayroll')}} ">Edit Payroll</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-toggle="sub-slide" href="#">
                            <span class="sub-side-menu__label">Job Dashboard</span><i class="sub-angle fa fa-angle-right"></i>
                        </a>
                        <ul class="sub-slide-menu">
                            {{-- <li><a href="{{url('job/index')}} " class="sub-slide-item">Dashboard</a></li> --}}
                            <li><a href="{{url('job/job-list')}} " class="sub-slide-item">Job Lists</a></li>
                            <li><a href="{{url('job/job-view')}} " class="sub-slide-item">Job View</a></li>
                            {{-- <li><a href="{{url('job/job-application')}} " class="sub-slide-item">Job Applications</a></li> --}}
                            {{-- <li><a href="{{url('job/job-apply')}} " class="sub-slide-item">Apply Job</a></li> --}}
                            <li><a href="{{url('job/job-new')}} " class="sub-slide-item">New Job</a></li>
                            {{-- <li><a href="{{url('job/job-user')}} " class="sub-slide-item">User Profile</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-airplay sidemenu_icon"></i>
                    <span class="side-menu__label">Settings</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{url('admin-general')}} " class="slide-item">Admin</a></li>
                    <li><a href="{{url('admin-api')}} " class="slide-item">Super Admin</a></li>
                    <li><a href="{{url('admin-role')}} " class="slide-item">Account</a></li>
                </ul>
            </li>
            @else
{{--                user--}}
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <i class="feather feather-home sidemenu_icon"></i>
                        <span class="side-menu__label">HRM</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        {{-- <li><a href="{{url('hrm/index')}} " class="slide-item">Dashboard</a></li> --}}
                        <li><a href="{{url('hrm/department/index')}} " class="slide-item">Department</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Request Leave</span><i class="sub-angle fa fa-angle-right"></i></a>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Time Attendance</span><i class="sub-angle fa fa-angle-right"></i></a>
                        </li>
                        <li><a href="{{url('hrm/hr-award')}} " class="slide-item">View Payroll</a></li>
                    </ul>
                </li>
            @endif
            {{-- HRM End --}}


{{--Job start--}}
            
            @if(Illuminate\Support\Facades\Auth::user()->test_role=="admin")
{{-- SuperAdmin--}}
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-slack sidemenu_icon"></i>
                    <span class="side-menu__label">Super Admin</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    {{-- <li><a href="{{url('super/index')}} " class="slide-item">Dashboard</a></li> --}}
                    <li><a href="{{url('super/super-company')}} " class="slide-item">Companies</a></li>
                    <li><a href="{{url('super/super-subscription')}} " class="slide-item">Subscription Plans</a></li>
                    <li><a href="{{url('super/super-invoices')}} " class="slide-item">Invoices</a></li>
                    <li><a href="{{url('super/super-admins')}} " class="slide-item">Super Admins</a></li>
                    <li><a href="{{url('super/super-settings')}} " class="slide-item">Settings</a></li>
                    <li><a href="{{url('super/super-role')}} " class="slide-item">Role Access</a></li>
                </ul>
            </li>
{{-- end superadmin--}}
            @endif

            {{-- Recycle Bin Start --}}
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="feather feather-shopping-cart sidemenu_icon"></i>
                    <span class="side-menu__label">Recycle Bin</span><i class="angle fa fa-angle-right"></i>
                </a>
            </li>
            {{-- Recycle Bin End --}}
        </ul>
        <div class="Annoucement_card">
            <div class="text-center">
                <div>
                    <h5 class="title mt-0 mb-1 ml-2 font-weight-bold tx-12">Announcement</h5>
                    <div class="bg-layer py-4">
                        <img src="{{URL::asset('assets/images/photos/announcement-1.png')}}" class="py-3 text-center mx-auto" alt="img">
                    </div>
                    <p class="subtext mt-0 mb-0 ml-2 fs-13 text-center my-2">Make an Announcement to Our Employee</p>
                </div>
            </div>
            <button class="btn btn-block btn-primary my-4 fs-12">Create Announcement</button>
            <button class="btn btn-block btn-outline fs-12">See history</button>
        </div>
    </div>
</aside>
<!--aside closed-->
