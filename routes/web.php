<?php

use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ApplicantController::class, 'index'])->name('index');
Route::get('/applicants/{id}/edit',[ApplicantController::class, 'edit'])->name('edit');
Route::put('/applicant/{id}/edit_save',[ApplicantController::class, 'save_edit'])->name('edit_save');
Route::get('/delete/{id}',[ApplicantController::class, 'index'])->name('delete');
Route::post('/{applicant}/hired',[ApplicantController::class, 'hired'])->name('hired');

