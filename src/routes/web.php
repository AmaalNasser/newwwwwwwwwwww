<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('contact', function () {
    return view('Contact::contact');
});

Route::post('contact', function (Request $request) {
    return $request->all();
})->name('contact');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'send'])->name('send');

// Route::get('admin', function () {
//     return view('contact::admin');
// });