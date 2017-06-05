<?php



Route::post('viber/callBack', 'thurka\viber\ViberController@callBack')->name('viber.callback');