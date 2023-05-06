<?php

use App\Http\Controllers\StaticPagesController;
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

Route::get('/', function () {
    return redirect('/ru');
});


Route::middleware(['locale'])->group(function () {
    Route::get('/{locale}', [StaticPagesController::class, 'index'])->name('home')->where('locale', 'ru|en');
    Route::get('/{locale}/products/{id}', [HomeController::class, 'show'])->name('show')->where(['locale' => 'ru|en', 'id' => '[0-9]+']);

    // Route::get('/uz/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    // Route::post('/uz/register', [RegisterController::class, 'register']);
    // Statik sahifalar uchun route-lar
    Route::get('/{locale}/about', [StaticPagesController::class, 'about'])->name('about')->where('locale', 'ru|en');
    // boshqa statik sahifalar

    // Dinamik sahifalar uchun route-lar
    // ... boshqa resurslar ...
    

});

Route::get('/switch/{locale}', [LanguageController::class, 'switchLanguage'])->name('locale.switch');