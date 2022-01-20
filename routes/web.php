<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\AnswersController;
use App\Http\Controllers\Admin\AttemptsController;
use App\Http\Controllers\Admin\AttemptDetailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\StatisticsController;

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
Route::group(['prefix' => 'admin','middleware' => ['role:superAdmin']], function () {
	Route::get(
	    '/dashboard',
	    [DashboardController::class, 'index']
	)->name('admin/dashboard');
	Route::get(
	    '/',
	    [DashboardController::class, 'index']
	)->name('/');
	Route::get(
	    '/users',
	    [UserController::class, 'index']
	)->name('users');
	Route::post(
	    '/changeRole',
	    [UserController::class, 'changeRole']
	)->name('changeRole');
	Route::resource('roles', RolesController::class);
	Route::resource('questions', QuestionsController::class);
	Route::resource('answers', AnswersController::class);
	Route::resource('attempts', AttemptsController::class);
	Route::resource('attempDetail', AttemptDetailController::class);
});

Route::get('/questionnaire',[QuestionnaireController::class, 'index'])->middleware(['auth'])->name('questionnaire');
Route::get('/statistics',[StatisticsController::class, 'index'])->middleware(['auth'])->name('statistics');
Route::post('/submitAnswers',[QuestionnaireController::class, 'submit'])->middleware(['auth'])->name('submitAnswers');

require __DIR__.'/auth.php';
