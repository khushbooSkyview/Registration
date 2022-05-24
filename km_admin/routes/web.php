<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SPController;
use App\Http\Controllers\SocialiteAuthController;
use App\Models\User;

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
    return view('auth.login');
});


Route::get('google', [SocialiteAuthController::class, 'googleRedirect'])->name('auth/google');
Route::get('/auth/google-callback', [SocialiteAuthController::class, 'loginWithGoogle']);


Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');

Route::group(['middleware' => ['auth']], function() {

Route::get('/dashboard', function () {
    $user_count = User::where('occupation', 'LIKE', "private")->where('partOccupation','private')->count();
    $user = User::where('occupation', 'LIKE', "private")->where('partOccupation','private')->get();

    return view('dashboard',['users'=>$user,'user_counts'=>$user_count]);
})->name('dashboard');
    
//User
    
Route::get('/users',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create']);
Route::post('user/create',[UserController::class,'store'])->name('create-user');
Route::get('user/{id}',[UserController::class,'edit']);
Route::post('user/update',[UserController::class,'update']);
Route::get('user/delete/{id}',[UserController::class,'delete']);

//Role
Route::get('/roles',[RoleController::class,'index']);
Route::get('role/create',[RoleController::class,'create']);
Route::post('role/create',[RoleController::class,'store'])->name('create-role');
Route::get('role/{id}',[RoleController::class,'edit']);
Route::post('role/update',[RoleController::class,'update']);
Route::post('/role/delete/{id}', [RoleController::class,'delete']);

//Permission

Route::get('/permissions', [PermissionController::class,'index']);
Route::get('/permission/create', [PermissionController::class,'create']);
Route::post('/permission/create', [PermissionController::class,'store'])->name('create-permission');

// Route::post('/permission/update', [PermissionController::class,'update']);
Route::post('/permission/delete/{id}', [PermissionController::class,'delete']);

});

require __DIR__.'/auth.php';
