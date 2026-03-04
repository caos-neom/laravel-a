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

Route::get('/', [App\Http\Controllers\Principal::class, 'home'])->name('página-inicial');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'about'])->name('página-sobre');

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





