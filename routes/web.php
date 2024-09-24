<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PagesController;
use App\Models\Service;
use App\Models\Employee;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/service', function () {
    $services = Service::latest()->get();
    return view('pages.service', compact('services'));
})->name('service');

Route::get('/service/{slug}', function ($slug) {
    $service = Service::where('slug', $slug)->firstOrFail();
    return view('pages.single-service', compact('service'));
})->name('single.service');

Route::get('/employee/{id}', function($id){
    $employee = Employee::where('id', $id)->first();
    return view('pages.single-employee', compact('employee'));
})->name('single.employee');

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

    
    Route::get('/employee-list', [PagesController::class, 'employee'])->name('admin.employee');
    Route::get('/add-employee', [PagesController::class, 'addEmployee'])->name('admin.addemployee');
    Route::get('/edit-employee/{id}', [PagesController::class, 'editEmployee'])->name('admin.editemployee');

    Route::get('/review-list', [PagesController::class, 'review'])->name('admin.review');
    Route::get('/add-review', [PagesController::class, 'addReview'])->name('admin.addreview');
});
