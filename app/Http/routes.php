<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use EloquentORM\User;

Route::get('/create', function () {
    $user = User::create([
        'name'  => 'Linda Duran',
        'email' => 'linda@gmail.com',
        'password' => bcrypt('123456'),
        'gender' => 'f',
        'biography' => 'Alumna'
    ]);
    return 'Usuario Guardado';
});

Route::get('/update-user', function () {
    //busca el usuario con el id 1. find(1);
    $user = User::find(1);
    
    $user->gender = 'f';
    $user->biography = 'Desarrollador web';
    
    $user->save();
    
    return 'Usuario Actualizado';
});
