<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use resources\views\User;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/about',[HomeController::class,'about']);

route::get('/contact',[HomeController::class,'contact']);

route::get('/loginhome',[HomeController::class,'loginhome']);

route::get('/productuser',[HomeController::class,'productuser']);

route::get('/product',[AdminController::class,'product']);

route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

route::get('/showproduct',[AdminController::class,'showproduct']);

route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

route::get('/updateview/{id}',[AdminController::class,'updateview']);

route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);

route::get('/search',[HomeController::class,'search']);

route::post('/addcart/{id}',[HomeController::class,'addcart']);

route::get('/showcart',[HomeController::class,'showcart']);

route::get('/delete/{id}',[HomeController::class,'deletecart']);

route::post('/order',[HomeController::class,'confirmorder']);

route::get('/showorder',[AdminController::class,'showorder']);

route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);


