<?php

use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\QuizQuestionAnswerController;
use App\Http\Controllers\Api\QuizQuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('quiz', QuizController::class);
Route::resource('quiz-question', QuizQuestionController::class);
Route::resource('quiz-question-answer', QuizQuestionAnswerController::class);