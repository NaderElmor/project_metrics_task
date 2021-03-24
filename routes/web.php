<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Projects\ProjectController;

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


Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('/projects', ProjectController::class, [

    'names' => [
        'index' => 'projects',
        'show' => 'projects.show',
    ]
]);

Route::post('tasks/changeStatus/{id}',[ProjectController::class, 'changeStatus'])->name('changeStatus');


