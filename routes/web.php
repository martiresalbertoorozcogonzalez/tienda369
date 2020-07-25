<?php

Route::get('/prueba','PruebaController@prueba')->name('prueba');
    
Route::get('/resultados','PruebaController@resultados')->name('resultados');

Route::get('/', function () {

/*$prod= Product::findOrFail(2);

$prod->slug= 'producto-3';

$prod->save();

return $prod;
*/
/*$prod = new Product();
$prod->nombre = 'Producto 3';
$prod->slug = 'Producto 3';
$prod->category_id = 2;
$prod->descripcion_corta = 'Producto ';
$prod->descripcion_larga = 'Producto ';
$prod->especificaciones = 'Producto ';
$prod->datos_de_interes = 'Producto ';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal = 'No'; 
$prod->save();
return $prod;
*/
    //return view('welcome');


/*$cat = Category::find(1)->products;

return $cat;
*/

return view('tienda.index');
});


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::resource('admin/user', 'Admin\AdminUserController')->names('admin.user');

Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');

Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');

Route::get('cancelar/{ruta}', function($ruta) {
    return redirect()->route($ruta)->with('cancelar','Acción Cancelada!');
})->name('cancelar');



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

