<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ProductController;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [ProductController::class, 'uploadForm'])->name('products.uploadForm');
    Route::post('/products/upload', [ProductController::class, 'import'])->name('products.import');
    Route::get('/products/table', [ProductController::class, 'getProductTable'])->name('products.table');
    Route::delete('/products/delete-selected', [ProductController::class, 'deleteSelected'])->name('products.deleteSelected');
    });


use App\Http\Controllers\EmpleadosController;
 
Route::group(['middleware' => ['web']], function () {
    Route::get('/excel-csv-file', [EmpleadosController::class, 'uploadFormcsv'])->name('empleadoscsv.uploadFormcsv');
    Route::post('/empleadoscsv/upload', [EmpleadosController::class, 'import'])->name('empleados.import');
    Route::get('/empleadoscsv/table', [EmpleadosController::class, 'getEmpleadoTable'])->name('empleados.table');
    Route::delete('/empleadoscsv/delete-selected', [EmpleadosController::class, 'deleteSelected'])->name('empleados.deleteSelected');
    });



/* 
    Route::post('/import-excel-csv-file', [ExcelCSVController::class, 'importExcelCSV']);
    Route::get('/export-excel-csv-file/{slug}', [ExcelCSVController::class, 'exportExcelCSV']);

 */
