<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\{LatestListController};

// Just to make it show we open the proj
Route::get('/', [LatestListController::class,'index']);

// The real rout where should be put
Route::prefix('admin')->group(function () {
        Route::get('lastLast', [LatestListController::class,'index']);
        Route::get('dataTableLastLast', [LatestListController::class,'index1'])->name('table');
});


