<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;

Route::get('/', [KotaController::class, 'index'])->name('list-kota');
Route::get('/add-kota', [KotaController::class, 'showFormAdd'])->name('add-kota');
Route::get('/edit-kota/{id}', [KotaController::class, 'showFormEdit'])->name('edit-kota');
Route::post('/proccess-add', [KotaController::class, 'processAdd'])->name('process-add');
Route::post('/process-edit/{id}', [KotaController::class, 'proccesEdit'])->name('process-edit');
Route::delete('/process-delete/{id}', [KotaController::class, 'destroy'])->name('process-delete');
Route::get('/download-pdf', [KotaController::class, 'downloadPdf'])->name('download-pdf');
