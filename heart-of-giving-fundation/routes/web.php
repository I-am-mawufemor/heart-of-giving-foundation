<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
// return view('welcome');
// });

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/events', [\App\Http\Controllers\DashboardController::class, 'events']);
Route::get('/galleries', [\App\Http\Controllers\DashboardController::class, 'galleries']);
Route::get('/contacts', [\App\Http\Controllers\DashboardController::class, 'contacts']);
Route::get('/aboutUs', [\App\Http\Controllers\DashboardController::class, 'aboutUs']);
Route::get('/UpcomingEvents', [\App\Http\Controllers\DashboardController::class, 'UpcomingEvents']);
Route::get('/homeEvent', [\App\Http\Controllers\DashboardController::class, 'homeEvent']);
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/{type}', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard.type');



// Frontend route

//root homepage route
// Route::get('/{action?}', [PageController::class, 'handleAction'])->where('action', 'action1|action2|action3')->name('index');
Route::get('/', [PageController::class, 'index'])->name('index');

//resources route 
Route::resource('event', 'App\Http\Controllers\PostController');
Route::resource('about', 'App\Http\Controllers\AboutController');
Route::resource('contact', 'App\Http\Controllers\Contact');
Route::resource('gallery', 'App\Http\Controllers\GalleryController');
Route::resource('upcomingEvent', 'App\Http\Controllers\UpcomingEventController');
Route::resource('home-event', 'App\Http\Controllers\HomeEventController');
// admin route 
/*Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
        Route::get('/events', [AdminController::class, 'event'])->name('admin.event-project');
        Route::get('/about', [AdminController::class, 'about'])->name('admin.about');
        Route::get('/contact', [AdminController::class, 'contact'])->name('admin.contact');
    });
});*/




/*
// Include admin panel routes
require __DIR__ . '/admin.php';

//include manager panel routes
require __DIR__ . '/manager.php';*/