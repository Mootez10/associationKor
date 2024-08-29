<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Middleware\Admin;



Route::get('/', function () {
    
    return view('Frontend.master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/adminpage', [HomeController::class,'index'])->
middleware(['auth',Admin::class]);

Route::get('/', [FrontController::class,'index']);


require __DIR__.'/auth.php';

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

//Route::post('/logout' , [HomeController::class, 'logoutFun']);

    Route::get('print_pdf',[AdminController::class,'print_pdf'])->middleware(['auth','admin']);

    Route::get('/event', [FrontController::class,'eventfunction']);
    Route::get('/team', [FrontController::class,'teamfunction']);
    Route::get('/team2', [FrontController::class,'team2function']);
    Route::get('/team3', [FrontController::class,'team3function']);
    Route::get('/team4', [FrontController::class,'team4function']);
    Route::get('/team5', [FrontController::class,'team5function']);
    Route::get('/contact', [FrontController::class,'contact']);
    Route::get('/about', [FrontController::class,'about']);

    
    Route::post('/message', [FrontController::class, 'store'])->name('contact-messages.store');
    Route::post('/messages', [FrontController::class, 'store'])->name('contact-messages.send');

    Route::get('/calender', [FrontController::class, 'indexCalender']);
    Route::get('/events', [FrontController::class, 'getEvents']);
    Route::get('/schedule/delete/{id}', [FrontController::class, 'deleteEvent']);

    
    
    