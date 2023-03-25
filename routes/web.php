<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'home']);

Route::get('/login', [SiteController::class, 'loginForm'])->name('login');
Route::post('/login',[SiteController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){

    Route::post('/logout', [SiteController::class, 'logout']);


    Route::get('/members/create', [MemberController::class,'create']);
    Route::post('/members',[MemberController::class, 'store']);
    Route::get('/members', [MemberController::class,'index']);
    Route::get('/members/edit/{member}', [MemberController::class, 'edit']);
    Route::put('/members/{member}', [MemberController::class, 'update']);

    Route::get('/companies/create', [CompanyController::class,'create']);
    Route::post('/companies',[CompanyController::class, 'store']);
    Route::get('/companies', [CompanyController::class,'index']);
    Route::get('/companies/edit/{company}', [CompanyController::class, 'edit']);
    Route::put('/companies/{company}', [CompanyController::class, 'update']);
});
