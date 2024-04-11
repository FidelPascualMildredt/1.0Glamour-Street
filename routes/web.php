<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentDetailController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Actions\Fortify\CreateNewUser;
use App\Models\Payment;
use Illuminate\Http\Client\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.web');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
Route::resource('roles',RolController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('orders', OrderController::class);
Route::resource('order_details', OrderDetailController::class);
Route::resource('payments', PaymentController::class);
Route::resource('payment_details', PaymentDetailController::class);
Route::resource('logos', LogoController::class);
Route::resource('colors', ColorController::class);
Route::resource('sizes', SizeController::class);


// Route::post('/register', [CreateNewUser::class, 'create'])->name('register');
// Route::post('/register/{user}', function ($user) {
//     dd($user);
// });
//rutas de las vistas

// Route::get('/', [CategoryController::class, 'boton'])->name('welcome');
Route::get('/', [ProductController::class, 'displayProducts'])->name('productos.display');

Route::get('/carrito', function () {
    return view('web.carrito');
})->name('carrito');
// Route::get('/carrito', [PaymentController::class, 'carrito'])->name('carrito');




Route::get('dashboard', function () {
    return view('dashboard');
});
