<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Menu\Piket;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['login' => false, 'register' => false]);

route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    // Route::get('/register', Register::class)->name('register');
});

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/piket', Piket::class)->name('piket');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
