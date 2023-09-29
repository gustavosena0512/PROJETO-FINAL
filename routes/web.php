<?php

use App\Http\Controllers\Games;
use App\Http\Controllers\ProfileController;
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
Route::get('/', [Games::class, 'pagina_incial']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/adicionarJogo',[Games::class, 'adicionar']);
    Route::get('/cadastrarJogo',[Games::class, 'cadastrar']);
    Route::get('/excluir/{id}',[Games::class, 'excluir']);


});

require __DIR__.'/auth.php';
