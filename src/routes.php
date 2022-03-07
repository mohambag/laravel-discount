<?php


use \Illuminate\Support\Facades\Route;


Route::prefix('discount')->middleware(['web','auth'])->group(function (){

        Route::get('/', [\Mbagri\discount\Controllers\DiscountController::class, 'index'])->name('discount');
        Route::get('/create', [\Mbagri\discount\Controllers\DiscountController::class, 'create'])->name('discount.create');
        Route::post('/store', [\Mbagri\discount\Controllers\DiscountController::class, 'store'])->name('discount.store');
        Route::get('/edit/{id}', [\Mbagri\discount\Controllers\DiscountController::class, 'edit'])->name('discount.edit')->where('id', '[0-9]+');
        Route::post('/update/{discount}', [\Mbagri\discount\Controllers\DiscountController::class, 'update'])->name('discount.update');
        Route::get('/destroy/{id}', [\Mbagri\discount\Controllers\DiscountController::class, 'destroy'])->name('discount.destroy');
        Route::get('/trash/view', [\Mbagri\discount\Controllers\DiscountController::class, 'trashview'])->name('discount.trashview');
        Route::get('/{id}/delete', [\Mbagri\discount\Controllers\DiscountController::class, 'delete'])->name('discount.trash');
        Route::get('/{id}/trash/delete', [\Mbagri\discount\Controllers\DiscountController::class, 'trashDelete'])->name('discount.trashdelete');
        Route::get('/{id}/recovery', [\Mbagri\discount\Controllers\DiscountController::class, 'recovery'])->name('discount.recovery');
        Route::post('/destroy/All', [\Mbagri\discount\Controllers\DiscountController::class, 'destroyAll'])->name('discount.destroyAll');
        Route::get('/status/{id}', [\Mbagri\discount\Controllers\DiscountController::class, 'updatestatus'])->name('discount.updatestatus');
        Route::get('/export/excel', [\Mbagri\discount\Controllers\DiscountController::class, 'exportExcell'])->name('discounts.excel');

});
