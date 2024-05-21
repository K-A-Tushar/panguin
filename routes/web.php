<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CouncilController;
use App\Http\Controllers\ExamoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminRole;
use Illuminate\Support\Facades\Route;

Route::resource('examole', ExamoleController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');
// tushar edit
//address
Route::get('/address', [AddressController::class, 'index'])->name('address.index');
Route::post('/address/districts', [AddressController::class, 'loadDistricts'])->name('address.districts');
Route::post('/address/thanas', [AddressController::class, 'loadThanas'])->name('address.thanas');
//address end

Route::get('/todos', [TodoController::class, 'index'])->name('todo.index'); 
Route::get('/councils', [CouncilController::class, 'index'])->name('council.index'); 
// Route::get('/todo', [TodoController::class, 'create']);
// Route::get('/todo', [TodoController::class, 'store']);

//Routing Eamole Index, Create, Edit, Store, Delete
Route::get('examole',[ExamoleController::class, 'index'])->name('examole.index');/// examole
Route::get('examole/edit/{id}',[ExamoleController::class, 'edit']);/// examole
Route::get('examole/create',[ExamoleController::class, 'create']);/// examole
Route::post('examole',[ExamoleController::class, 'store']);/// examole
// Route::resource('examole', ExamoleController::class);/// examole

Route::middleware(CheckAdminRole::class)->group(function () {
    Route::get('/todo/add', [TodoController::class, 'create']);
    Route::post('/todo', [TodoController::class, 'store']);
    Route::get('/users', [UserController::class, 'index'])->name('users');

    Route::get('/council/add', [CouncilController::class, 'create']);
    Route::post('/council', [CouncilController::class, 'store']);
});
// tushar edit end

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
