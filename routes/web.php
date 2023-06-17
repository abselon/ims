<?php

use App\Http\Livewire\Editcategory;
use App\Http\Livewire\Login;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\Register;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\AddCategory;
use App\Http\Livewire\Indexcategory;
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

Route::get('/', Homepage::class);
Route::get('/register', Register::class);
Route::get('/login', Login::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/add-category', AddCategory::class);
Route::get('/categories', Indexcategory::class);
Route::get('/edit-category/{id}', Editcategory::class);