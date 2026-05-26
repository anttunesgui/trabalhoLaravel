<?php

use App\Http\Controllers\JogadorController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EstatisticaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('jogadores', [JogadorController::class, 'index'])->name('jogadores.index');
Route::get('jogadores/cadastrar', [JogadorController::class,'create'])->name('jogadores.create');
Route::post('jogadores/cadastrar', [JogadorController::class,'store'])->name('jogadores.store');
Route::get('jogadores/{jogador}', [JogadorController::class, 'show'])->name('jogadores.show');
Route::get('jogadores/excluir/{jogador}',[JogadorController::class,'delete'])->name('jogadores.delete');
Route::delete('jogadores/{jogador}', [JogadorController::class,'destroy'])->name('jogadores.destroy');


Route::get('equipes', [EquipeController::class, 'index'])->name('equipes.index');
Route::get('equipes/cadastrar', [EquipeController::class, 'create'])->name('equipes.create');
Route::post('equipes/cadastrar', [EquipeController::class,'store'])->name('equipes.store');
Route::get('equipes/{equipe}', [EquipeController::class, 'show'])->name('equipes.show');
Route::get('equipes/excluir/{equipe}', [EquipeController::class, 'delete'])->name('equipes.delete');
Route::delete('equipes/{equipe}', [EquipeController::class,'destroy'])->name('equipes.destroy');

Route::get('contratos/{jogador}', [ContratoController::class, 'show'])->name('contratos.show');
Route::get('contratos/cadastrar/{jogador}', [ContratoController::class, 'create'])->name('contratos.create');
Route::post('contratos/cadastrar', [ContratoController::class,'store'])->name('contratos.store');
Route::get('contratos/excluir/{contrato}', [ContratoController::class, 'delete'])->name('contratos.delete');
Route::delete('contratos/{contrato}', [ContratoController::class,'destroy'])->name('contratos.destroy');

Route::get('estatisticas/{jogador}', [EstatisticaController::class,'show'])->name('estatisticas.show');
Route::get('estatisticas/cadastrar/{jogador}', [EstatisticaController::class, 'create'])->name('estatisticas.create');
Route::post('estatisticas/cadastrar', [EstatisticaController::class,'store'])->name('estatisticas.store');
Route::get('estatisticas/excluir/{estatistica}', [EstatisticaController::class, 'delete'])->name('estatisticas.delete');
Route::delete('estatisticas/{estatistica}', [EstatisticaController::class,'destroy'])->name('estatisticas.destroy');


