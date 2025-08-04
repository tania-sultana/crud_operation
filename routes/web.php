<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CrudController::class, 'showData'])->name('crud.index');
Route::get('/add-data', [CrudController::class, 'addData'])->name('crud.add');
Route::post('/store-data', [CrudController::class, 'storeData'])->name('crud.store');
Route::get('/edit-data/{id}', [CrudController::class, 'editData'])->name('crud.edit');
Route::post('/update-data/{id}', [CrudController::class, 'updateData'])->name('crud.update');
Route::get('/delete-data/{id}', [CrudController::class, 'deleteData'])->name('crud.delete');
