<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PrimeNumberController;
use App\Http\Controllers\FactorialController;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\MultiplicationTableController;
use App\Http\Controllers\VowelCountController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\InvestmentController;
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

//Simple Calculator
Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator', [CalculatorController::class, 'calculate']);

//Prime Numbers
Route::get('/prime-numbers', [PrimeNumberController::class, 'printFirstPrimesNumber']);

//Factorial
Route::get('/factorial', [FactorialController::class, 'index']);
Route::post('/factorial', [FactorialController::class, 'calculate']);

//Palindrome
Route::get('/check-palindrome', [PalindromeController::class, 'index']);
Route::post('/check-palindrome', [PalindromeController::class, 'check']);

//Table
Route::get('/multiplication-table', [MultiplicationTableController::class, 'index']);
Route::post('/multiplication-table', [MultiplicationTableController::class, 'generateTable']);

//Vowel Counter
Route::get('/vowel-count', [VowelCountController::class, 'index']);
Route::post('/vowel-count', [VowelCountController::class, 'countVowels']);

//Grade Average
Route::get('/calculate-average', [GradesController::class, 'index']);
Route::post('/calculate-average', [GradesController::class, 'calculateAverage']);

//Interest Calculation
Route::get('/calculate-investment', [InvestmentController::class, 'index']);
Route::post('/calculate-investment', [InvestmentController::class, 'calculate']);
