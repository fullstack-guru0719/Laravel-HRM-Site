<!--app header-->
<div class="app-header header">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="<?php echo e(url('index')); ?> ">
                <img src="<?php echo e(URL::asset('assets/images/brand/logo.png')); ?>" class="header-brand-img desktop-lgo" alt="Dayonelogo">
                <img src="<?php echo e(URL::asset('assets/images/brand/logo-white.png')); ?>" class="header-brand-img dark-logo" alt="Dayonelogo">
                <img src="<?php echo e(URL::asset('assets/images/brand/favicon.png')); ?>" class="header-brand-img mobile-logo" alt="Dayonelogo">
                <img src="<?php echo e(URL::asset('assets/images/brand/favicon1.png')); ?>" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
            </a>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#">
                    <i class="feather feather-menu"></i>
                </a>
                <a class="close-toggle" href="#">
                    <i class="feather feather-x"></i>
                </a>
            </div>
            <div class="d-flex order-lg-2 my-auto ml-auto">
                <a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-toggle="search">
                    <i class="feather feather-search search-icon header-icon"></i>
                </a>
                <div class="dropdown"><?php echo e(\Illuminate\Support\Facades\Auth::user()->test_role); ?></div>
          
                <div class="dropdown profile-dropdown">
                    <a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
                        <span>
                            <img src="<?php echo e(URL::asset('assets/images/users/16.png')); ?>" alt="img" class="avatar avatar-md bradius">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                        <div class="p-3 text-center border-bottom">
                            <a href="#" class="text-center user pb-0 font-weight-bold"><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></a>
                            <p class="text-center user-semi-title">App Developer</p>
                        </div>
                        <a class="dropdown-item d-flex" href="<?php echo e(url('user/profile')); ?>">
                            <i class="feather feather-user mr-3 fs-16 my-auto"></i>
                            <div class="mt-1">Profile</div>
                        </a>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="feather feather-settings mr-3 fs-16 my-auto"></i>
                            <div class="mt-1">Settings</div>
                        </a>
                        <a class="dropdown-item d-flex" href="#">
                            <i class="feather feather-mail mr-3 fs-16 my-auto"></i>
                            <div class="mt-1">Messages</div>
                        </a>
                        <a class="dropdown-item d-flex" href="<?php echo e(url('hrm/employee/hr-addemployee')); ?>">
                            <i class="feather feather-edit-2 mr-3 fs-16 my-auto"></i>
                            <div class="mt-1">Register Employee</div>
                        </a>
                        <a class="dropdown-item d-flex" href="<?php echo e(url('logout')); ?>">
                            <i class="feather feather-power mr-3 fs-16 my-auto"></i>
                            <div class="mt-1">Sign Out</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/app header-->
<?php /**PATH E:\practice_by_++\Laravel-HRM-Site\resources\views/layouts/app-header.blade.php ENDPATH**/ ?>