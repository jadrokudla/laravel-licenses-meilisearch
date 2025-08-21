<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontaktyController;
use App\Http\Controllers\LicenseController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/zoznam_kontaktov', [KontaktyController::class, 'index'])->name('zoznam_kontaktov');
Route::get('/zoznam_kontaktov/create', [KontaktyController::class, 'create'])->name('create_kontakt');
Route::post('/zoznam_kontaktov', [KontaktyController::class, 'store'])->name('kontakty.store');

Route::get('/licencses', [LicenseController::class, 'index'])->name('licenses.index');
Route::get('/licencses/create', [LicenseController::class, 'create'])->name('licenses.create');
Route::post('/licencses', [LicenseController::class, 'store'])->name('licenses.store');
Route::get('/licencses/search', [LicenseController::class, 'search'])->name('licenses.search');
Route::get('/licencses/search-page', [LicenseController::class, 'searchPage'])->name('licenses.search.page');

Route::get('/licencses/by_parking', [LicenseController::class, 'parking'])->name('licenses.parking');
Route::get('/licencses/by_age_group', [LicenseController::class, 'sortByAgeGroup'])->name('licenses.age_group');

