<?php

use App\Http\Controllers\Admin\HikeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\HikeController as PublicHikeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);


$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/hikes', [PublicHikeController::class, 'index'])->name('hike.index');
Route::get('/hikes/{slug}-{hike}', [PublicHikeController::class, 'show'])->name('hike.show')->where([
    'hike' => $idRegex,
    'slug' => $slugRegex
]);


//Route::get('/search/tags/{tags}', [PublicHikeController::class, 'searchByTags'])->name('search.tags');

Route::get('/welcome', function () {
    return view('test');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('hike', HikeController::class)->except(['show']);
    Route::resource('tag', TagController::class)->except(['show']);
});
