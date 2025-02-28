<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('/admin', function () {
    return view('admin');
});

Route::get('/analyserv2', function () {
    return view('analyserv2');
});

Route::get('/bot', function () {
    return view('bot');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/dbot', function () {
    return view('dbot');
});

Route::get('/digits', function () {
    return view('profile.digits');
});

Route::get('/digits-percentages', function () {
    return view('profile.digitsPercentages');
});

Route::get('/eo', function () {
    return view('profile.eo');
});

Route::get('/even-odd', function () {
    return view('even_odd');
});



Route::get('/market-analyser', function () {
    return view('marketanalyser');
});

Route::get('/md', function () {
    return view('md');
});

Route::get('/ou', function () {
    return view('ou');
});

Route::get('/over-under', function () {
    return view('over_under');
});

Route::get('/rf-strategies', function () {
    return view('rfstrategies');
});

Route::get('/rise-fall', function () {
    return view('risefall');
});

Route::get('/risk-management', function () {
    return view('riskmanagement');
});


Route::get('/v2-over-under', function () {
    return view('v2overunder');
});
