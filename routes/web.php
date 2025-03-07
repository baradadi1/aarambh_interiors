<?php

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

route::get("/",[App\Http\Controllers\HomeController::class,'index'])->name('home.index');
route::get("about_us",[App\Http\Controllers\AboutController::class,'index'])->name('about.index');
route::get("our_project",[App\Http\Controllers\OurProjectController::class,'index'])->name('project.index');
route::get("contect_us",[App\Http\Controllers\ContectController::class,'index'])->name('contect.index');
route::get("inquery_now",[App\Http\Controllers\InquiryController::class,'index'])->name('inquery.index');
