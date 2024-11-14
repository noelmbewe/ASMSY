<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Teacher\TeacherdashController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassSubjectController;
use App\Http\Controllers\TeacherManageController;

use App\Http\Controllers\Teacher\AssignmentController; 

use App\Http\Controllers\Teacher\ExamController;

use App\Http\Controllers\TeacherLandingController;

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


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.action');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/index', [adminController::class, 'index'])->name('admin.index');
});


Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/teacher', [TeacherLandingController::class, 'index'])->name('teacher.index');
});


Route::group(['middleware' => ['role:parent']], function () {
    Route::get('/parent/index', [parentController::class, 'index'])->name('parent.index');
});


Route::resource('teachers', TeacherController::class);




Route::get('/parents', [ParentController::class, 'index'])->name('parents.index');
Route::get('/parents/create', [ParentController::class, 'create'])->name('parents.create');
Route::post('/parents', [ParentController::class, 'store'])->name('parents.store');
Route::get('/parents/{parent}/edit', [ParentController::class, 'edit'])->name('parents.edit');
Route::put('/parents/{parent}', [ParentController::class, 'update'])->name('parents.update');
Route::delete('/parents/{parent}', [ParentController::class, 'destroy'])->name('parents.destroy');

    Route::get('students', [StudentController::class, 'index'])->name('admin.students.index'); // Display all students
    Route::get('students/create', [StudentController::class, 'create'])->name('admin.students.create'); // Show the form for creating a new student
    Route::post('students', [StudentController::class, 'store'])->name('admin.students.store'); // Store a new student
    Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('admin.students.edit'); // Show the form for editing a student
    Route::put('students/{student}', [StudentController::class, 'update'])->name('admin.students.update'); // Update an existing student
    Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('admin.students.destroy'); // Delete a student


Route::resource('students', StudentController::class, ['as' => 'admin']);


 
     


            // Routes for managing classes
            Route::get('/classes', [ClassController::class, 'index'])->name('classes.index'); // List all classes
            Route::get('/classes/create', [ClassController::class, 'create'])->name('classes.create'); // Show form to create a new class
            Route::post('/classes', [ClassController::class, 'store'])->name('classes.store'); // Store a new class
            Route::get('/classes/{id}', [ClassController::class, 'show'])->name('classes.show'); // Show a specific class
            Route::get('/classes/{id}/edit', [ClassController::class, 'edit'])->name('classes.edit'); // Show form to edit a class
            Route::put('/classes/{id}', [ClassController::class, 'update'])->name('classes.update'); // Update a specific class
            Route::delete('/classes/{id}', [ClassController::class, 'destroy'])->name('classes.destroy'); // Delete a specific class

                        // Routes for managing subjects
            Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index'); // List all subjects
            Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create'); // Show form to create a new subject
            Route::post('/subjects', [SubjectController::class, 'store'])->name('subjects.store'); // Store a new subject
            Route::get('/subjects/{id}', [SubjectController::class, 'show'])->name('subjects.show'); // Show a specific subject
            Route::get('/subjects/{id}/edit', [SubjectController::class, 'edit'])->name('subjects.edit'); // Show form to edit a subject
            Route::put('/subjects/{id}', [SubjectController::class, 'update'])->name('subjects.update'); // Update a specific subject
            Route::delete('/subjects/{id}', [SubjectController::class, 'destroy'])->name('subjects.destroy'); // Delete a specific subject
            
            // Routes for managing class subjects and teacher assignments
            Route::get('/classsubject', [ClassSubjectController::class, 'index'])->name('classsubject.index'); // List all class subjects
            Route::get('/classsubject/create', [ClassSubjectController::class, 'create'])->name('classsubject.create'); // Show form to assign subject to class and teacher
            Route::post('/classsubject', [ClassSubjectController::class, 'store'])->name('classsubject.store'); // Store the class subject assignment
            Route::get('/classsubject/{subjectID}/{classID}/edit', [ClassSubjectController::class, 'edit'])->name('classsubject.edit'); // Show form to edit an assignment
          
            Route::put('classsubject/{subjectID}/{classID}', [ClassSubjectController::class, 'update'])->name('classsubject.update');
            Route::delete('classsubject/{subjectID}/{classID}', [ClassSubjectController::class, 'destroy'])->name('classsubject.destroy');
            


          
            

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('teachers', TeacherController::class);
        
    Route::get('teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('admin/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('teachers', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('admin/teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('admin/teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');
    Route::delete('admin/teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
    
    Route::resource('classes', ClassController::class);
    Route::resource('parents', ParentController::class);
    Route::resource('students', StudentController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('classsubjects', ClassSubjectController::class);

    
    
});




// Define routes under a teacher prefix and name grouping
Route::prefix('teacher')->name('teacher.')->middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('teacher/assignment', [AssignmentController::class, 'index'])->name('assignment.index');
    Route::get('teacher/assignment/create', [AssignmentController::class, 'create'])->name('assignment.create');
    Route::post('teacher/assignment', [AssignmentController::class, 'store'])->name('assignment.store');
    Route::get('teacher/assignment/{id}/edit', [AssignmentController::class, 'edit'])->name('assignment.edit');
    Route::put('teacher/assignment/{id}', [AssignmentController::class, 'update'])->name('assignment.update');
    Route::delete('teacher/assignment/{id}', [AssignmentController::class, 'destroy'])->name('assignment.destroy');


    
    Route::get('teacher/exams', [ExamController::class, 'index'])->name('exam.index');

    // Route to create a new exam
    Route::get('teacher/exams/create', [ExamController::class, 'create'])->name('exam.create');

    // Route to store a newly created exam
    Route::post('teacher/exams', [ExamController::class, 'store'])->name('exam.store');

    // Route to edit an existing exam
    Route::get('teacher/exams/{examID}/edit', [ExamController::class, 'edit'])->name('exam.edit');

    // Route to update an existing exam
    Route::put('teacher/exams/{examID}', [ExamController::class, 'update'])->name('exam.update');

    // Route to delete an exam
    Route::delete('teacher/exams/{examID}', [ExamController::class, 'destroy'])->name('exam.destroy');

    Route::get('teacher/exams/{examID}/grade', [ExamController::class, 'showGradePage'])->name('exam.grade');
    Route::post('teacher/exams/grade/store', [ExamController::class, 'storeGrades'])->name('exam.grade.store');

   
});



