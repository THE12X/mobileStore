<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin;

Route::get('/', function () {
    return view('loginP');
});


Route::group(['middleware' => 'guest'], function () {
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::post('/loginn', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'Products']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/Products',[HomeController::class,'Products'] )->name('home.Products');
Route::get('/About',[HomeController::class,'About'] )->name('home.About');
Route::get('/Contact',[HomeController::class,'Contact'] )->name('home.Contact');
Route::get('/Games',[HomeController::class,'Games'] )->name('home.Games');
/*games */
Route::get('/tictactoe',[HomeController::class,'tictactoe'] )->name('home.tictactoe');
Route::get('/stick',[HomeController::class,'stick'] )->name('home.stick');
Route::get('/maze',[HomeController::class,'maze'] )->name('home.maze');
Route::get('/stack',[HomeController::class,'stack'] )->name('home.stack');
Route::get('/runner',[HomeController::class,'runner'] )->name('home.runner');
Route::get('/pin',[HomeController::class,'pin'] )->name('home.pin');

/*admin*/
Route::get('/show',[admin::class,'show'] )->name('show');
Route::get('/add',[admin::class,'index'] )->name('admin');
Route::post('/add',[admin::class,'create'] )->name('admin.add');
Route::get('/admin',[admin::class,'store'] )->name('admin.show');
Route::get('/delete/{id}',[admin::class,'destroy'] )->name('admin.delete');

route::get('/redirect',[HomeController::class,'redirect']);






