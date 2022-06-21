<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testDemoPdf', [MeetingController::class, 'testDemoPdf']);

Route::post('/testpython', [MeetingController::class, 'testpython']);
Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('common_pages.index');
    })->name('dashboard');
    Route::get('/test', function () {
        return view('dashboard');
    });
});
// meeting
Route::prefix('meeting')->group(function () {
    Route::get('/index', [MeetingController::class, 'index']);
    Route::get('/meeting-new', [MeetingController::class, 'meeting_new']);
    Route::post('/meeting-create', [MeetingController::class, 'meeting_create']);
    Route::post('/meeting-update', [MeetingController::class, 'meeting_update']);
    Route::get('/meeting-view/{id}', [MeetingController::class, 'meeting_view']);
    Route::get('/meeting-convert/{id}', [MeetingController::class, 'meeting_convert']);
    Route::get('/meeting-edit/{id}', [MeetingController::class, 'meeting_edit']);
    Route::get('/meeting-delete/{id}', [MeetingController::class, 'meeting_delete']);
    Route::get('/meeting_file-download/{id}', [MeetingController::class, 'meeting_file_download']);
    Route::get('/meeting_file-delete/{id}', [MeetingController::class, 'meeting_file_delete']);

    Route::get('/meeting-list', [MeetingController::class, 'meeting_list']);
});
// work orders
Route::prefix('workOrder')->group(function () {
    Route::get('/index', [WorkOrderController::class, 'index']);
    Route::get('/workOrder-new', [WorkOrderController::class, 'workOrder_new']);
    Route::post('/workOrder-create', [WorkOrderController::class, 'workOrder_create']);
    Route::post('/workOrder-update', [WorkOrderController::class, 'workOrder_update']);
    Route::get('/workOrder-list', [WorkOrderController::class, 'workOrder_list']);
    Route::get('/workOrder-convert/{id}', [WorkOrderController::class, 'workOrder_convert']);
    Route::get('/workOrder-view/{id}', [WorkOrderController::class, 'workOrder_view']);
    Route::get('/workOrder-delete/{id}', [WorkOrderController::class, 'workOrder_delete']);
    Route::get('/workOrder-edit/{id}', [WorkOrderController::class, 'workOrder_edit']);
    Route::get('/order_file-download/{id}', [WorkOrderController::class, 'order_file_download']);
    Route::get('/order_file-delete/{id}', [WorkOrderController::class, 'order_file_delete']);
});

//task
Route::prefix('task')->group(function () {
    Route::get('/index', [TaskController::class, 'index']);
    Route::get('/task-new', [TaskController::class, 'task_new']);
    Route::post('/task-create', [TaskController::class, 'task_create']);
    Route::post('/task-update', [TaskController::class, 'task_update']);
    Route::get('/task-list', [TaskController::class, 'task_list']);
    Route::get('/task-view/{id}', [TaskController::class, 'task_view']);
    Route::get('/task-edit/{id}', [TaskController::class, 'task_edit']);
    Route::get('/task-delete/{id}', [TaskController::class, 'task_delete']);
    Route::get('/task-profile', [TaskController::class, 'task_profile']);
    Route::get('/task-complete', [TaskController::class, 'task_complete']);
    Route::get('/task-hold', [TaskController::class, 'task_hold']);
    Route::get('/task-running', [TaskController::class, 'task_running']);
    Route::get('/task_file-download/{id}', [TaskController::class, 'task_file_download']);
    Route::get('/task_file-delete/{id}', [TaskController::class, 'task_file_delete']);

});
// project
Route::prefix('project')->group(function () {
    Route::get('/index', [ProjectController::class, 'index']);
    Route::get('/project-new', [ProjectController::class, 'project_new']);
    Route::post('/project-create', [ProjectController::class, 'project_create']);
    Route::post('/project-update', [ProjectController::class, 'project_update']);
    Route::get('/project-list', [ProjectController::class, 'project_list']);
    Route::get('/project-view/{id}', [ProjectController::class, 'project_view']);
    Route::get('/project-edit/{id}', [ProjectController::class, 'project_edit']);
    Route::get('/project-delete/{id}', [ProjectController::class, 'project_delete']);
    Route::get('/project_file-download/{id}', [ProjectController::class, 'project_file_download']);
    Route::get('/project_file-delete/{id}', [ProjectController::class, 'project_file_delete']);
});
// Job
Route::prefix('job')->group(function () {
    Route::get('/index', function () {
        return view('common_pages.job-dashboard.index');
    });
    Route::get('/job-application', [JobController::class, 'job_application']);
    Route::post('/job-apply',[JobController::class, 'job_apply']);
    Route::get('/job-list', [JobController::class, 'job_list']);
    Route::get('/job-new', [JobController::class, 'job_new']);
    Route::post('/job-create', [JobController::class, 'job_create']);
    Route::post('/job-update', [JobController::class, 'job_update']);
    Route::get('/job-user',[JobController::class, 'job_user']);
    Route::get('/job-view/{id}',[JobController::class, 'job_view']);
    Route::get('/job-edit/{id}',[JobController::class, 'job_edit']);
    Route::get('/job-delete/{id}',[JobController::class, 'job_delete']);


});

Route::prefix('hrm')->group(function () {
//    Dashboard
    Route::get('/index', function () {
        return view('common_pages.hrm.index');
    });
//    Department

    Route::get('/department/index', [DepartmentController::class, 'index']);
    Route::post('/department/department-new', [DepartmentController::class, 'store']);
    Route::post('/department/department-update', [DepartmentController::class, 'update']);
    Route::get('/department/department-delete/{id}', [DepartmentController::class, 'delete']);

//    employee
    Route::get('/employee/hr-emplist', [EmployeeController::class, 'employee_list']);
    Route::post('/employee/employee-create', [EmployeeController::class, 'employee_create'] );
    Route::post('/employee/employee-update', [EmployeeController::class, 'employee_update'] );
    Route::get('/employee/hr-empview/{id}', [EmployeeController::class, 'employee_view']);
    Route::get('/employee/hr-empdelete/{id}', [EmployeeController::class, 'employee_delete']);
    Route::get('/employee/hr-addemployee',[EmployeeController::class, 'employee_new']);

//    time-attendance

    Route::get('/time-attendance/hr-face_att', function () {
        return view('common_pages.hrm.time-attendance.face-att');
    });

    Route::get('/time-attendance/hr-attlist', function () {
        return view('common_pages.hrm.time-attendance.hr-attlist');
    });
    Route::get('/time-attendance/hr-attmark', function () {
        return view('common_pages.hrm.time-attendance.hr-attmark');
    });
    Route::get('/time-attendance/hr-attuser', function () {
        return view('common_pages.hrm.time-attendance.hr-attuser');
    });
    Route::get('/time-attendance/hr-attview', function () {
        return view('common_pages.hrm.time-attendance.hr-attview');
    });
    Route::get('/time-attendance/hr-leaves', function () {
        return view('common_pages.hrm.time-attendance.hr-leaves');
    });
    Route::get('/time-attendance/hr-leavesapplication', function () {
        return view('common_pages.hrm.time-attendance.hr-leavesapplication');
    });
    Route::get('/time-attendance/hr-overviewcldr', function () {
        return view('common_pages.hrm.time-attendance.hr-overviewcldr');
    });
    Route::get('/time-attendance/hr-recentleaves', function () {
        return view('common_pages.hrm.time-attendance.hr-recentleaves');
    });
//    payroll
    Route::get('/payroll/hr-addpayroll', function () {
        return view('common_pages.hrm.payroll.hr-addpayroll');
    });
    Route::get('/payroll/hr-editpayroll', function () {
        return view('common_pages.hrm.payroll.hr-editpayroll');
    });
    Route::get('/payroll/hr-empsalary', function () {
        return view('common_pages.hrm.payroll.hr-empsalary');
    });
//    award
    Route::get('/hr-award', function () {
        return view('common_pages.hrm.hr-award');
    });
//    events
    Route::get('/hr-events', function () {
        return view('common_pages.hrm.hr-events');
    });
//    expenses
    Route::get('/hr-expenses', function () {
        return view('common_pages.hrm.hr-expenses');
    });
//    holiday
    Route::get('/hr-holiday', function () {
        return view('common_pages.hrm.hr-holiday');
    });
//    notice
    Route::get('/hr-notice', function () {
        return view('common_pages.hrm.hr-notice');
    });
//    settings
    Route::get('/hr-settings', function () {
        return view('common_pages.hrm.hr-settings');
    });

});


Route::prefix('super')->group(function () {
    Route::get('/index', function () {
        return view('common_pages.super-dashboard.index');
    });
    Route::get('/super-admins', function () {
        return view('common_pages.super-dashboard.super-admin');
    });
    Route::get('/super-company', function () {
        return view('common_pages.super-dashboard.super-company');
    });
    Route::get('/super-invoices', function () {
        return view('common_pages.super-dashboard.super-invoices');
    });
    Route::get('/super-role', function () {
        return view('common_pages.super-dashboard.super-role');
    });
    Route::get('/super-settings', function () {
        return view('common_pages.super-dashboard.super-settings');
    });
    Route::get('/super-subscription', function () {
        return view('common_pages.super-dashboard.super-subscription');
    });


});


