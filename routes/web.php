<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PagesController;
use App\Models\Service;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/service', function () {
    return view('pages.service');
})->name('service');

Route::get('/service/{slug}', function ($slug) {
    $service = Service::where('slug', $slug)->firstOrFail();
    return view('pages.single-service', compact('service'));
})->name('single.service');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// admin
Route::group(['prefix' => '/admin'], function(){
    Route::get('/customer-messages', [PagesController::class, 'showMessages'])->name('admin.message');
    Route::get('/reply-messages/{id}', [PagesController::class, 'replyMessages'])->name('admin.replymessage');

    Route::get('/services', [PagesController::class, 'service'])->name('admin.service');
    Route::get('/add-service', [PagesController::class, 'addService'])->name('admin.addservice');
    Route::get('/edit-service/{id}', [PagesController::class, 'editService'])->name('admin.editservice');
});
