<?php

use App\Http\Controllers\UserContrpller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return 'Hello world';

});

Route::get('/test2', function(){
    return 'Helo world ke20000';

});

Route::redirect('/test','/test2' );

 Route::view('/greeting', 'greeting', ['name' => 'FEBRI']);

// Route::get ('/user/{id?', function($id = null){
//     return"User " .$id;
// });

Route::get ('/user/{id', function($id){
    return"User " .$id;
})-> where('id', '[0-9]+');

Route::get('/user/profile', function(){
    return "Ini Profile";
})->name('profile');

Route::get('/hello/{name}',[UserContrpller::class, 'show']);