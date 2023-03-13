<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ECommerce\ShopController;
use App\Http\Controllers\HomeController;

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
Route::get('/hh',function ()
{
return auth::user();
})->middleware('verified');

Auth::routes(['verify'=>true]);
Route::middleware(['admin'])->prefix('dashboard')->group(function () {
   Route::get('/', [HomeController::class,'root'])->name('root');
   Route::get('{any}', [HomeController::class, 'index'])->name('/index');

   //Language Translation
});
Route::get('index/{locale}', [HomeController::class, 'lang']);

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');


Route::get('/', [ShopController::class, 'index']);
Route::get('/products', function (){
   return  view('eCommerce/products');
});
Route::get('/test',function(){
    return view('Admin.dashboard');
});

// Route::prefix('ecommerce')->group(function () {
//    Route::get('{any}', [App\Http\Controllers\ecommerce\ShopController::class, 'index']);
// });