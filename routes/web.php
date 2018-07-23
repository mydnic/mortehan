<?php

Route::view('splash', 'splash');

if (!request()->ajax()) {
    Route::view('/{vue?}', 'app')->where('vue', '[\/\w\.-]*');
}

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('travel', 'Admin\TravelController');
});
