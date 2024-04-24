<?php

use App\Models\Foto;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', App\Livewire\Home::class)->name('home');

Route::get('/post/{foto_id}', App\Livewire\DetailPost::class)->name('detail.post');
Route::get('/user/{username}', App\Livewire\UserProfile::class)->name('user.profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/create', App\Livewire\Insert::class)->name('create.post');
    Route::get('/update/{foto_id}', App\Livewire\Update::class)->name('update.post');
    Route::get('/delete/{foto_id}', function($foto_id) {
        Foto::find($foto_id)->delete();
        return back();
    })->name('delete.post');
    Route::get('/profile', App\Livewire\Profile::class)->name('profile');
    Route::get('/logout', function() {
        Auth::logout();
        return back();
    })->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', App\Livewire\Login::class)->name('login');
    Route::get('/register', App\Livewire\Register::class)->name('register');
});
