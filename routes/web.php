<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
}); 

Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\CursoController::class, 'index'])->name('curso.index');
    Route::post('/add', [App\Http\Controllers\CursoController::class, 'add'])->name('curso.add');
    Route::post('/remove', [App\Http\Controllers\CursoController::class, 'remove'])->name('curso.remove');
}); 

Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.index');
    Route::post('/add', [App\Http\Controllers\ProfessorController::class, 'add'])->name('professor.add');
    Route::post('/remove', [App\Http\Controllers\ProfessorController::class, 'remove'])->name('professor.remove');
}); 














// Route::get('/contato', [App\Http\Controllers\contato::class, 'contato']);

// // aluno
// Route::get('/boletim', [App\Http\Controllers\boletim::class, 'boletim']);
// Route::get('/horarios', [App\Http\Controllers\horarios::class, 'horarios']);
// Route::get('/presença', [App\Http\Controllers\presença::class, 'presença']);
// Route::get('/grade_curricular', [App\Http\Controllers\grade_curricular::class, 'grade_curricular']);
// Route::get('/progressao_parcial', [App\Http\Controllers\progressao_parcial::class, 'progressao_parcial']);
// Route::get('/horas_de_curso', [App\Http\Controllers\horas_de_curso::class, 'horas_de_curso']);

// // professor
// Route::get('/ocorrencias', [App\Http\Controllers\ocorrencias::class, 'ocorrencias']);
// Route::get('/chamada', [App\Http\Controllers\chamada::class, 'chamada']);
// Route::get('/salas', [App\Http\Controllers\salas::class, 'salas']);
// Route::get('/suporte', [App\Http\Controllers\suporte::class, 'suporte']);





