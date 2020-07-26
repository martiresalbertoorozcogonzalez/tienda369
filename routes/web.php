<?php

// Rutas para pruebas

Route::get('/prueba','PruebaController@prueba')->name('prueba');
    
Route::get('/resultados','PruebaController@resultados')->name('resultados');


//Rutas Front

Route::get('/','TiendaController@index')->name('tienda');


//Rutas Admin

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::resource('admin/user', 'Admin\AdminUserController')->names('admin.user');

Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');

Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');

Route::get('cancelar/{ruta}', function($ruta) {
    return redirect()->route($ruta)->with('cancelar','Acción Cancelada!');
})->name('cancelar');



// Crear usuarios

// App\User::create([
//    'name' => 'Irene Alburez',
//    'email' => 'irene@gmail.com',
//    'password' => bcrypt('12345678'),
// ]);

// App\User::create([
//    'name' => 'Carlos Orozco',
//    'email' => 'carlos@gmail.com',
//    'password' => bcrypt('12345678'),
// ]);

// App\User::create([
//    'name' => 'Beto Orozco',
//    'email' => 'beto@gmail.com',
//    'password' => bcrypt('12345678'),
// ]);

