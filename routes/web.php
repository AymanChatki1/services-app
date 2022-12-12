<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('services',[ServiceController::class, 'index'])->name('services.index');
Route::get('services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('services/stock', [ServiceController::class, 'stock'])->name('service.stock');

Route::get('services/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('services/update/{id}', [ServiceController::class, 'update'])->name('service.update');


Route::delete('services/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');