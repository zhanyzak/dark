<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    IndexController,NewsController,EventController
};

Route::group([
    'as' => 'dark.',
    'prefix' => '{locale?}',
    'middleware' => 'setlocale',
    'where' => ['locale' => '[a-zA-Z]{2}'],
], function() {
    /**Роуты глав стр */
    Route::get('/', [IndexController::class, 'index'])->name('index');

    /**Стр новости */
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/news/{slug}', [NewsController::class, 'show'])->name('showNews');

    /**Стр событии */
    Route::get('/events', [EventController::class, 'index'])->name('events');
    Route::get('/events/{slug}', [EventController::class, 'show'])->name('showEvents');
});