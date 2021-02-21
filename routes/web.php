<?php

use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\BreadController;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\Dish_itemController;
use App\Http\Controllers\Dish_catugoryController;
use App\models\Slider;
use App\models\About;
use App\models\Categori;
use App\models\Aitem;
use App\models\Iteem;
use App\models\Bread;
use App\models\Dishes;
use App\models\Dishes_item;
use App\models\catugori;






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

Route::get('/', function () {
    return view('index',[
      'sliders'=>Slider::all(),
      'abouts'=>About::OrderBy('id','DESC')->limit(1)->get(),
      'breads'=>Bread::OrderBy('id','DESC')->limit(1)->get(),
      'dishes'=>Dishes::OrderBy('id','DESC')->limit(1)->get(),
      'categories'=>Categori::all(),
      'items'=>Aitem::all(),
      'dish_items'=>Iteem::all(),
      'catugoris'=>catugori::all(),
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('slider', SliderController::class);
Route::resource('categori', CategoriController::class);
Route::resource('about', AboutController::class);
Route::resource('item', ItemController::class);
Route::resource('reservation', ReservationController::class);
Route::resource('contact', ContactController::class);
Route::resource('bread', BreadController::class);
Route::resource('dishes', DishesController::class);
Route::resource('iteem', Dish_itemController::class);
Route::resource('catugori', Dish_catugoryController::class);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
