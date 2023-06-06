<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsolController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class,'homepage'])->name('welcome');
Route::post('/newsletters', [PublicController::class, 'newsletters'])->name('newsletters');

Route::get('/game/gameCreate', [GameController::class,'create'])->name('gameCreate');
Route::post('/game/store', [GameController::class,'store'])->name('game.store');
Route::get('/game/gameIndex', [GameController::class,'index'])->name('gameIndex');

Route::get('/console/index', [ConsolController::class, 'index' ])->name('console.index');
Route::get('/console/create', [ConsolController::class, 'create' ])->name('console.create');
Route::post('/console/store', [ConsolController::class, 'store' ])->name('console.store');
Route::get('/console/show/{consol}',[ConsolController::class, 'show'])->name('console.show');
route::get('/console/edit/{consol}',[ConsolController::class, 'edit'])->name('console.edit');
route::put('/console/update/{consol}',[ConsolController::class, 'update'])->name('console.update');
route::delete('/console/destroy/{consol}',[ConsolController::class, 'destroy'])->name('console.destroy');
route::get('/console{consol}/detach{game}',[ConsolController::class, 'detach'])->name('console.detach');


route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
route::delete('/profile/destroy', [UserController::class, 'destroy'])->name('user.destroy');
