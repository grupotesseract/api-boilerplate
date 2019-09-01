<?php

/*
|--------------------------------------------------------------------------
| Rotas Protegidas (Somente Logado)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:api'])->group(function () {
    Route::resource('usuarios', 'UsuarioAPIController')->except(['destroy', 'create', 'store']);
    Route::get('usuario', 'UsuarioAPIController@showAuthenticated');
});

/*
|--------------------------------------------------------------------------
| Rotas Livres
|--------------------------------------------------------------------------
*/

Route::post('/login', 'UsuarioAPIController@login');
