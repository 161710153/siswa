<?php

// basic routing

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Hallo</h1>'
    . 'Selamat Datang Di Webapp Saya<br>'
    . 'Laravel emang keren.';
});

//route parameter
Route::get('user/{nama}', function ($a) {
    return 'nama saya adalah <b>'.$a.'<br>';
});

Route::get('/kantin/{bakpaw}/{teh}/{gorengan}', function($b,$c,$d){
     return 'Saya memesan  <b>'.$b.'</b><br>'
      .'Minuman  <b>' .$c.'</b><br>'
       .'Cemilan <b>' .$d.'</b><br>';
 });

//route optimal parameter
Route::get('user/{name?}' , function ($a= 'aku'){
	return $a;
});
