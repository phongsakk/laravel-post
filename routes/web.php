<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('/dashboard/post', PostController::class);

Route::get('/', function () {
    echo 'userrrrrrrrrrrr <a href="/login">login</a>';
})->name('site');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/widget', function () {
    return view('widget');
});

Auth::routes();

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginPost'])->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::post('register', function (Request $request) {
    $arr['name'] = $request->get('username');
    $arr['email'] = $request->get('email');
    $arr['password'] = bcrypt($request->get('password'));

    $user = new User($arr);
    $user->save();
    session()->flash('alert', 'Success registration');
    return redirect()->route('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
