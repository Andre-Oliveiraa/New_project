<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('aluno', [AlunoController::class, 'index'])->name('aluno.index');
Route::get('aluno/create', [AlunoController::class, 'create'])->name('aluno.create');
Route::post('aluno', [AlunoController::class, 'store'])->name('aluno.store');

Route::get('disciplina', [DisciplinaController::class, 'index'])->name('disciplina.index');
Route::get('disciplina/create', [DisciplinaController::class, 'create'])->name('disciplina.create');
Route::post('disciplina', [DisciplinaController::class, 'store'])->name('disciplina.store');