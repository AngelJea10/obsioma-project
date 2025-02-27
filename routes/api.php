<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomStudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\TeacherController;


Route::apiResource('classroom', ClassroomController::class);

Route::apiResource('grade', GradeController::class);

Route::apiResource('course', CourseController::class);

Route::apiResource('classroom_student', ClassroomStudentController::class);

Route::apiResource('attendance', AttendanceController::class);

Route::apiResource('exam_type', ExamTypeController::class);

Route::apiResource('exam', ExamController::class);

Route::apiResource('exam_result', ExamResultController::class);

Route::apiResource('student', StudentController::class);

Route::apiResource('parent', ParentsController::class);

Route::apiResource('teacher', TeacherController::class);

// Route::get('/user', [UserController::class, 'show']);
// Route::post('/user', [UserController::class, 'create']);
// Route::put('/user', [UserController::class, 'update']);
// Route::delete('/user', [UserController::class, 'delete']);
