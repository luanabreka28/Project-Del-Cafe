<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\user\VoucherController;
use App\Http\Controllers\admin\web\ListDayController;
use App\Http\Controllers\web\auth\AuthUserController;
use App\Http\Controllers\admin\web\ListFoodController;
use App\Http\Controllers\web\user\ChangeUserController;
use App\Http\Controllers\admin\auth\AuthAdminController;
use App\Http\Controllers\admin\web\AdminCommentController;
use App\Http\Controllers\admin\web\AdminVoucherController;
use App\Http\Controllers\web\user\DashboardUserController;
use App\Http\Controllers\admin\web\DashboardAdminController;
use App\Http\Controllers\admin\web\ListAlternatifeController;
use App\Http\Controllers\admin\web\ListChangeController;
use App\Http\Controllers\web\user\AboutUsController;
use App\Http\Controllers\web\user\CommentController;

Route::group(['domain'=>''],function(){
        
    Route::get('/', function () {
        return view('pages.auth.mainuser');
    });
    Route::prefix('user/')->name('user.')->group(function(){
        Route::get('auth',[AuthUserController::class, 'index'])->name('auth.index');
        Route::get('/register',[AuthUserController::class, 'register'])->name('register');
        Route::prefix('auth/')->name('auth.')->group(function(){
            Route::get('',[AuthUserController::class, 'index'])->name('index');
            Route::post('login',[AuthUserController::class, 'do_login'])->name('login');
            Route::post('register',[AuthUserController::class, 'do_register'])->name('register');
            Route::get('logout',[AuthUserController::class, 'do_logout'])->name('logout');
        });
        Route::resource('home', DashboardUserController::class);
        Route::resource('change', ChangeUserController::class);
        Route::resource('comment', CommentController::class);
        Route::post('change/{change}/change',[ChangeUserController::class, 'simpan'])->name('change.change');
        // Route::get('change/{change}',[AdminVoucherController::class, 'show'])->name('change.show');
        Route::get('/voucher',[VoucherController::class, 'index'])->name('voucher.index');
        Route::get('/aboutus',[AboutUsController::class, 'index'])->name('about.index');
        
        
    });
    
    Route::prefix('/admin')->name('admin.')->group(function(){
        Route::prefix('auth/')->name('auth.')->group(function(){
            Route::get('/',[AuthAdminController::class, 'index'])->name('index');
            Route::post('login',[AuthAdminController::class, 'do_login'])->name('login');
            Route::post('register',[AuthAdminController::class, 'do_register'])->name('register');
            Route::get('logout',[AuthAdminController::class, 'do_logout'])->name('logout');
        });
        Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
        Route::resource('/list-day', ListDayController::class);
        Route::resource('/list-food', ListFoodController::class);
        Route::resource('alternatife', ListAlternatifeController::class);
        Route::resource('listchange', ListChangeController::class);
        Route::resource('voucher', AdminVoucherController::class);
        Route::resource('comment', AdminCommentController::class);
        Route::post('voucher/{product}/active',[AdminVoucherController::class, 'active'])->name('voucher.active');
    });
});