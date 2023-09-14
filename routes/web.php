<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create/', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store/', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');
