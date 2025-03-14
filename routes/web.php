<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvionController;
use App\Http\Controllers\PiloteController;
use App\Http\Controllers\VolController;

Route::get('/', function () {
    return view('dashboard', [
        'totalAvions' => \App\Models\Avion::count(),
        'totalPilotes' => \App\Models\Pilote::count(),
        'totalVols' => \App\Models\Vol::count(),
    ]);
});

Route::resource('avions', AvionController::class);
Route::resource('pilotes', PiloteController::class);
Route::resource('vols', VolController::class);

Route::get('/vols/avion/{codeAv}', [VolController::class, 'volsParAvion'])->name('vols.parAvion');
Route::get('/vols/pilote/{matPil}', [VolController::class, 'volsParPilote'])->name('vols.parPilote');
