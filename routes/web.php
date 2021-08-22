<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name("home");

Route::prefix("admin")->middleware(["auth","admin"])->group(function(){
    Route::get("/",[\App\Http\Controllers\AdminController::class,'index'])->name('admin');
    Route::get("/users",[\App\Http\Controllers\AdminController::class,'users'])->name('admin.users');
    Route::get("/users/add",[\App\Http\Controllers\AdminController::class,'addUser'])->name('admin.user.add');
    Route::post("/users/add",[\App\Http\Controllers\AdminController::class,'storeUser']);
    Route::get("/users/edit/{id}",[\App\Http\Controllers\AdminController::class,'editUser'])->name('admin.user.edit');
    Route::post("/users/edit/{id}",[\App\Http\Controllers\AdminController::class,'updateUser']);
    Route::post("/users/delete/{id}",[\App\Http\Controllers\AdminController::class,'deleteUser'])->name('admin.user.delete');

});



Route::get('login',[\App\Http\Controllers\HomeController::class,"login"])->name("login");
Route::post('login',[\App\Http\Controllers\HomeController::class,"post_login"]);

Route::get('register',[\App\Http\Controllers\HomeController::class,"register"])->name("register");
Route::post('register',[\App\Http\Controllers\HomeController::class,"post_register"]);

Route::get("sikayetler",[\App\Http\Controllers\HomeController::class,"sikayetler"])->name("sikayetler");

Route::get('/email/verify/{id}/{hash}', [\App\Http\Controllers\MailController::class,"verifyEmail"])->name('email.verify');

Route::middleware("auth")->group(function() {
    Route::post("logout", [\App\Http\Controllers\HomeController::class, "logout"])->name("logout");

    Route::get("profile", [\App\Http\Controllers\HomeController::class, "profile"])->name("user.profile")->middleware("verified");
    Route::post("profile", [\App\Http\Controllers\HomeController::class, "updateProfile"]);
    Route::post("update/password", [\App\Http\Controllers\HomeController::class, "updatePassword"])->name("user.update.password");

});
