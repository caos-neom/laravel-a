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
    Route::get('/remove/{id}', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\AlunoController::class, 'atualizar'])->name('aluno.atualizar');
    Route::post('/save', [App\Http\Controllers\AlunoController::class, 'save'])->name('aluno.save');
}); 

Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\CursoController::class, 'index'])->name('curso.index');
    Route::post('/add', [App\Http\Controllers\CursoController::class, 'add'])->name('curso.add');
    Route::get('/remove/{id}', [App\Http\Controllers\CursoController::class, 'remove'])->name('curso.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\CursoController::class, 'atualizar'])->name('curso.atualizar');
    Route::post('/save', [App\Http\Controllers\CursoController::class, 'save'])->name('curso.save');
}); 

Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.index');
    Route::post('/add', [App\Http\Controllers\ProfessorController::class, 'add'])->name('professor.add');
    Route::get('/remove/{id}', [App\Http\Controllers\ProfessorController::class, 'remove'])->name('professor.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\ProfessorController::class, 'atualizar'])->name('professor.atualizar');
    Route::post('/save', [App\Http\Controllers\ProfessorController::class, 'save'])->name('professor.save');
}); 

Route::prefix('/componente')->group(function(){
    Route::get('/index', [App\Http\Controllers\ComponenteController::class, 'index'])->name('componente.index');
    Route::post('/add', [App\Http\Controllers\ComponenteController::class, 'add'])->name('componente.add');
    Route::get('/remove/{id}', [App\Http\Controllers\ComponenteController::class, 'remove'])->name('componente.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\ComponenteController::class, 'atualizar'])->name('componente.atualizar');
    Route::post('/save', [App\Http\Controllers\ComponenteController::class, 'save'])->name('componente.save');
});


Route::prefix('/administrador')->group(function(){
    Route::get('/index', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administrador.index');
    Route::post('/add', [App\Http\Controllers\AdministradorController::class, 'add'])->name('administrador.add');
    Route::get('/remove/{id}', [App\Http\Controllers\AdministradorController::class, 'remove'])->name('administrador.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\AdministradorController::class, 'atualizar'])->name('administrador.atualizar');
    Route::post('/save', [App\Http\Controllers\AdministradorController::class, 'save'])->name('administrador.save');
});


// Route::get('/contato', [App\Http\Controllers\contato::class, 'contato']);

// // curso
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





