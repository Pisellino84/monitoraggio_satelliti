<?php

use App\Http\Controllers\CustomerController;
use App\Models\Satellite;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/technology', function () {
    return view('technology');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/tracking-live', function () {
    $satellites = Satellite::all();
    return view('tracking-live', compact('satellites'));
});

Route::get('/download-capability-statement', function () {
    // Definisce il percorso assoluto del file dentro storage/app/private/
    $filePath = storage_path('app/private/Capability_Statement_KRONOS_AEROSPACE.pdf');

    // Se usi una versione di Laravel dove lo hai messo semplicemente in storage/app/, usa:
    // $filePath = storage_path('app/Capability_Statement_KRONOS_AEROSPACE.pdf');

    if (!file_exists($filePath)) {
        abort(404, 'File non trovato sul server. Verifica il posizionamento in storage.');
    }

    // Forza il browser a scaricare il file impostando i corretti Content-Type e Content-Disposition
    return response()->download($filePath, 'KRONOS_Aerospace_Capability_Statement.pdf', [
        'Content-Type' => 'application/pdf',
    ]);
})->name('download.capability');

Route::get('/customers/ranking', [CustomerController::class, 'ranking'])->name('customers.ranking');