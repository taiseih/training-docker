<?php

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Test\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
直接Link経由のルート
*/

Route::get('inertia-test/', function () 
{
    return Inertia::render('InertiaTest');
});

/*
Controller経由のLink
*/
Route::get('inertia-test', [TestController::class, 'test'])->name('inertia.test');
Route::get('inertia/index', [TestController::class, 'index'])->name('inertia.index');
Route::get('inertia/create', [TestController::class, 'create'])->name('inertia.create');
Route::get('inertia/show/{id}', [TestController::class, 'show'])->name('inertia.show');
Route::post('inertia/', [TestController::class, 'store'])->name('inertia.store');


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
