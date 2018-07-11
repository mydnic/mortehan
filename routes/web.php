<?php

if (!request()->ajax()) {
    Route::view('/{vue?}', 'app')->where('vue', '[\/\w\.-]*');
}
