<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Route
Route::get('/', function () {
    return view('welcome');
});

/*
*method HTTP:
*1. Get : digunakan untuk menampilkan data/halaman.
*2. Post : digunakan untuk mengirim data (e.g: form data).
*3. Put / Patch : digunakan untuk mengupdate data.
*4. Delete : digunakan unuk menghapus data.
*/




//==================================================================================================DASHBOARD

//Dashboard Route
Route::get('admin/dashboard',[DashboardController::class, 'index']);




//==================================================================================================STUDENT

//Route untuk menampilkan student
Route::get('admin/student', [StudentController::class, 'index']);

//Menampilkan Form Student
Route::get('admin/student/create', [StudentController::class, 'create']);

//Roat untuk mengirim data form
Route::post('admin/student/create', [StudentController::class, 'store']);

//Route untk menmpilkan edit
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// Route untuk menyimpan hasil edit / update
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

//Route untuk menghapus data
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);






//==================================================================================================COURSES

//Route untuk menampilkan courses
Route::get('admin/courses',[CoursesController::class, 'index']);

//Route untuk Menampilkan form courses
Route::get('admin/courses/create',[CoursesController::class, 'create']);

//Route untuk mengirim data from
Route::post('admin/courses/create',[CoursesController::class, 'store']);

//Route untuk menampilkan edit
Route::get('admin/courses/edit/{id}',[CoursesController::class, 'edit']);

//Route untuk menyimpan hasil edit / update
Route::put('admin/courses/update/{id}',[CoursesController::class, 'update']);

//Route untuk menghapus data courses
Route::delete('admin/courses/delete/{id}',[CoursesController::class, 'destroy']);



