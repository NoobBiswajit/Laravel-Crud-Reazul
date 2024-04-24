<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;



Route::get('/', [StudentController::class , 'index'])->name('student.list');
Route::get('/addStudent', [StudentController::class , 'AddStudent'])->name('add.student');
Route::post('/creatStudent', [StudentController::class , 'createStudent'])->name('create.student');
Route::get('/edit/student/{id}', [StudentController::class , 'editStudent'])->name('edit.student');
Route::post('/update/student', [StudentController::class , 'updateStudent'])->name('update.student');
Route::get('/delete/student/{id}', [StudentController::class , 'deleteStudent'])->name('delete.student');
