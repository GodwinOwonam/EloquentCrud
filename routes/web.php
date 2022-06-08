<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhoneController;

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

Route::get('/',[AuthController::class, 'index']);

Route::post('/', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/add-phone', [PhoneController::class, 'showAddPhone']);

Route::post('/add-phone', [PhoneController::class, 'addPhone'])->name('addPhone');

Route::get('/user/my-phone', [PhoneController::class, 'showPhone']);


Route::get('/contacts', [ContactController::class, 'getMyContacts'])->name('contacts.show');
Route::post('/contacts', [ContactController::class, 'addContact'])->name('contacts.add');


