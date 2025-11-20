<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::view('/admin/dashboard', 'admin.dashboard')->middleware('can:access-admin')->name('admin.dashboard');
    Route::view('/coordenador/dashboard', 'coordenador.dashboard')->middleware('can:access-coordenador')->name('coordenador.dashboard');
    Route::view('/aluno/dashboard', 'aluno.dashboard')->middleware('can:access-aluno')->name('aluno.dashboard');
    Route::view('/settings', 'settings')->name('settings');
});
