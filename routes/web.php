<?php

Route::view('splash', 'splash');

if (!request()->ajax()) {
    Route::view('/{vue?}', 'app')->where('vue', '[\/\w\.-]*');
}
