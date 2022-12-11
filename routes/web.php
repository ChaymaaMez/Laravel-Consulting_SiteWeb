<?php
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;
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

Route::get('/', function (){
    return view('welcome');
});
Route::get('/add', function () {
    return view('DoneSubscribe');
});
Route::get('/Plan', function () {
    return view('planQuinquennal');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::post('/add',[SubscribeController::class , 'store'])->name('post.store');
Route:: get('/subscribe',[SubscribeController::class , 'create'])->name('post.create');
Route::get('/service',[contactController::class , 'create'])->name('contact.create');
Route::post('/success',[contactController::class , 'store'])->name('contact.store');
Route::get('/about',[aboutController::class , 'create'])->name('about.create');
Route::post('/send',[aboutController::class , 'store'])->name('about.store');
