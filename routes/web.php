<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;

Route::get('/',[AuthenticationController::class, 'login']);

Route::get('/login',[AuthenticationController::class, 'login'])->name('home');

Route::post('/validar',[AuthenticationController::class, 'makeLogin'])->name('makeLoginRota');

Route::get('/cadastrar',[AuthenticationController::class, 'signup'])->name('create');

Route::post('/cadastrar',[AuthenticationController::class, 'makeSignup'])->name('makeSignupRota');

Route::get('/gerenciamentoprojetos',[ProjectController::class, 'listProject'])->name('listarProjetosDeRota');

Route::get('/cadastrar-projetos',[ProjectController::class, 'createProject'])->name('cadastrarProjeto');

Route::post('/cadastrar-projetos',[ProjectController::class, 'recordProject'])->name('recordProjectRota');

Route::get('/dados-projeto/{id}',[ProjectController::class, 'delete_method'])->name('delete_route');

Route::get('/dadosdeprojeto/edit/{id}', [ProjectController::class, 'edit_method'])->name('edit_route');

Route::post('/dadosdeprojeto/edit/store',[ProjectController::class, 'edit_store_method'])->name('edit_store_route');
