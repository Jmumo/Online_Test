<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultsController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
 
Route::get('/tests/create/', [TestController::class, 'index']);
Route::post('/tests', [TestController::class, 'store'])->name('test.create');
Route::get('/tests/{test}', [TestController::class, 'show'])->name('test.show')->middleware('admin');
Route::get('/tests/{test}/questions/create',[QuestionController::class, 'create']);
Route::post('/tests/{test}/questions',[QuestionController::class, 'store']);
Route::delete('/tests/{test}/questions/{question}',[QuestionController::class, 'destroy'])->middleware('admin');
Route::get('/results/{test}-{slug}',[ResultsController::class, 'show']);
Route::post('/results/{test}-{slug}',[ResultsController::class, 'store']);

   //results routes
// Route::get('/tests/results', [TestController::class, 'results']);
// Route::get('/questions/results/{id}',[TestController::class, 'loadquestions']);




