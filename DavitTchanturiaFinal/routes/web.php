<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/signup', [AuthController::class, "signup"])->name("signup");
Route::post('/signup', [AuthController::class, "handleSignup"]);
Route::get('/login', [AuthController::class, "login"])->name("login");
Route::post('/login', [AuthController::class, "handleLogin"]);

Route::middleware('auth')->group(function () {
    Route::get('/quizzes', [QuizController::class, 'index'])->name("quizzes.index");

    //ქვიზის შექმნა
    Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
    Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');

    //ადმინის მიერ ქვიზის გამოქვეყნება
    Route::post('/quizzes/{quiz}/publish', [QuizController::class, 'publish'])->name('quizzes.publish');

    //შესული იუზერის ქვიზეების ნახვა
    //თუ ადმინია მაშინ ყველა pending ქვიზის ნახვა
    Route::get('/pending', [QuizController::class, 'pending'])->name('quizzes.pending');

    //ქვიზის წაშლა
    Route::delete('/pending/{quiz}', [QuizController::class, 'destroy'])->name('quizzes.destroy');

    //ქვიზების ედიტინგი
    Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
    Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');

    //კითხვების შექმნა
    Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');

    //კითხვების ქვიზებში გადატანა
    Route::get('/questions/all', [QuestionController::class, 'all'])->name('questions.all');
    Route::put('question/{id}', [QuestionController::class, 'update'])->name('question.update');



    // ქვიზის გავლის ამბები
    Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');
    Route::post('/quizzes/{quiz}/attempt', [QuizController::class, 'attempt'])->name('quizzes.attempt');
    Route::post('/quizzes/{quiz}/result', [QuizController::class, 'result'])->name('quizzes.result');

});




