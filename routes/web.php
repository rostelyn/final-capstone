<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailController;
use App\Models\Category;
use App\Models\Student;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[EvaluationController::class,'index'])->middleware('auth')->name('evaluation');

//Route::get('/',[StudentController::class,'index'])->middleware('auth')->name('student');


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/section', function () {return view('students.section');
});


Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::get('/section', [SectionController::class, 'index'])->name('section');
Route::get('/course/{courseNumber}', function ($courseNumber) {
    return view('course_details', ['courseNumber' => $courseNumber]);
});

Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');

//Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
//Route::get('/students', [StudentController::class, 'index'])->name('index');
//Route::get('add-student', [StudentController::class, 'create'])->name('add.student');

Route::resource('students', StudentController::class);
Route::get('/student/add', [StudentController::class, 'create'])->name('addstudent');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/addstudent', [StudentController::class, 'create']);
