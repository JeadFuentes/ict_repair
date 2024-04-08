<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RepairticketController;
use Illuminate\Support\Facades\Route;


Route::redirect('/dashboard','/repairticket')->name('dashboard');
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth','verified')->group(function(){
    Route::get('/repairticket', [RepairticketController::class, 'index'])->name('repairticket.index');
    Route::get('/repairticket/{id}', [RepairticketController::class, 'show'])->name('repairticket.show');
    Route::get('/repairticket/{repairticket}/edit', [RepairticketController::class, 'edit'])->name('repairticket.edit');
    Route::put('/repairticket/{repairticket}/update', [RepairticketController::class, 'update'])->name('repairticket.update');
    Route::delete('/repairticket/{repairticket}/', [RepairticketController::class, 'destroy'])->name('repairticket.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::resource('repairticket', RepairticketController::class);

Route::post('/repairticket', [RepairticketController::class, 'store'])->name('repairticket.store');
Route::get('/', [RepairticketController::class, 'landing'])->name('repairticket.landing');