<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function () {
    Route::resource('department', 'DepartmentController');
    Route::resource('designation', 'DesignationController');
    Route::resource('employee', 'EmployeeController');
    Route::resource('shift', 'ShiftController');
    Route::resource('schedule', 'ScheduleController');
    Route::resource('jobs', 'JobsController');
    Route::resource('job_applicant', 'JobApplicantController');
    Route::resource('attendance', 'AttendanceController');
    Route::resource('holiday', 'HolidayController');
    Route::resource('leave', 'LeaveController');
    Route::resource('award', 'AwardController');
    Route::resource('employee_award', 'EmployeeAwardController');
    Route::resource('notice_board', 'NoticeBoardController');
    Route::resource('inventory', 'InventoryController');
    Route::resource('training', 'TrainingController');
    Route::resource('employee_training', 'EmployeeTrainingController');
    Route::resource('task', 'TaskController');
    Route::resource('task_comment', 'TaskCommentController');
    Route::resource('email_template', 'EmailTemplateController');
    Route::resource('ticket', 'TicketController');
    Route::resource('role_permissions', 'RolePermissionsController');
    Route::resource('ticket_comment', 'TicketCommentController');
});
