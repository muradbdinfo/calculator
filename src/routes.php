<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});


Route::get('add/{a}/{b}', 'murad\calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'murad\calculator\CalculatorController@subtract');