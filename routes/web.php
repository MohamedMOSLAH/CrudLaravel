<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('products','ProductsController');
Route::resource('marks','MarksController');


/*
Route::get('products/', function () {
   // $user = factory('App\User')->create();
    for($i=5;$i<20;$i++){
    $product = new App\Product();
    $product->name = 'le '.$i.' product';
    $product->description = 'le  '.$i.' contenu';
    $product->mark_id = 1;
    
    $product->save();
    }
    });
    */
   /*
 for($i=1;$i<20;$i++){
        $product = new App\Mark();
        $product->name = 'Mark : '.$i;
     
        
        $product->save();
    }*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
