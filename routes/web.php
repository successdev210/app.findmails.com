<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(('auth'))->group(function () {
    Route::get('/findersearch', function () {
        return view('pages.findersearch', ['pageTitle' => 'findersearch']);
    })->name('findersearch');

    Route::get('/bulkverif2', function () {
        return view('pages.bulkverif2', ['pageTitle' => 'bulkverif2']);
    })->name('bulkverif2');
    Route::get('/bulktasks', function () {
        return view('pages.bulktasks', ['pageTitle' => 'bulktasks']);
    })->name('bulktasks');
    Route::get('/domainsearch', function () {
        return view('pages.domainsearch', ['pageTitle' => 'bulktasks']);
    })->name('domainsearch');
    Route::get('/bulkfinder2', function () {
        return view('pages.bulkfinder2', ['pageTitle' => 'bulktasks']);
    })->name('bulkfinder2');

    Route::get('/leads', function () {
        return view('pages.leads', ['pageTitle' => 'leads']);
    })->name('leads');
    Route::get('/campaign2', function () {
        return view('pages.campaign2', ['pageTitle' => 'campaign2']);
    })->name('campaign2');
    Route::get('/settings', function () {
        return view('pages.settings', ['pageTitle' => 'settings']);
    })->name('settings');
    Route::get('/singleemail', function () {
        return view('pages.singleemail', ['pageTitle' => 'singleemail']);
    })->name('singleemail');
});
Route::get('/test', function () {
    return view('pages.test', ['pageTitle' => 'test']);
})->name('test');

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
