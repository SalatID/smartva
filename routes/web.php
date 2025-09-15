<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/scan', [App\Http\Controllers\AdminController::class, 'scan'])->name('scan');
Route::get('/scan/{id}', [App\Http\Controllers\AdminController::class, 'scan_detail'])->name('scan.detail');
Route::get('/scan/{id}/vulnerability/{vulnId}', [App\Http\Controllers\AdminController::class, 'vulnerability_detail'])->name('vulnerability.detail');
Route::get('/chat', [App\Http\Controllers\AdminController::class, 'chat'])->name('chat');