<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware' == 'web'], function(){

    Route::resource('/user', UserController::class);

    Route::get('/dates', function (){

    });

});

//Route::get('/admin/user/roles', ['middleware'=>'role', function (){
//    // first register middleware on kernel
//    //based on request from route or web return to home use the middleware role
//    return "Middleware role";
//
//}]);

//Route::get('/admin', function (){
//   $user = Auth::user();
//
//   if ($user->isAdmin()){
//       echo "This user is Administrator";
//   }
//});

//Route::get('/admin', [AdminController::class, 'index']);

//Route::get('/admin', ['middleware'=>'IsAdmin', function (){
//    // first register middleware on kernel
//    //based on request from route or web return to home use the middleware role
//    return "Middleware role";
//
//}]);

//Route::get('/user', [UserController::class])->name('user');

require __DIR__.'/auth.php';
