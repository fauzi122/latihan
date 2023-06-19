<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaranaPrasaranaController;
use App\Http\Controllers\SaranaController;
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

Route::get('/', function () {
    return redirect()->route('login');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => 'cekadmin'], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard/admin', 'index')->name('dashboard');
        
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user');
        Route::get('/user/create', 'create')->name('user.create');
        Route::post('/users','store')->name('user.store');
        Route::get('/users/{user}','show')->name('users.show');
        Route::get('/user/{user}/edit', 'edit')->name('user.edit');
        Route::put('/users/{user}', 'update')->name('user.update');
        Route::delete('/user/{user}', 'destroy')->name('user.destroy');
        
    });
    
    Route::controller(PrasaranaController::class)->group(function () {
        Route::get('/prasarana', 'index')->name('prasarana');
        Route::get('/prasarana/create', 'create')->name('prasarana.create');
        Route::post('/prasarana','store')->name('prasarana.store');
        Route::get('/prasarana/{id}','show')->name('prasarana.show');
        Route::get('/prasarana/{id}/edit', 'edit')->name('prasarana.edit');
        Route::put('/prasarana/{id}', 'update')->name('prasarana.update');
        Route::delete('/prasarana/{id}', 'destroy')->name('prasarana.destroy');
    });
});

Route::group(['middleware' => 'cekopd'], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        });

        Route::controller(SaranaController::class)->group(function () {
            Route::get('/sarana', 'index')->name('sarana.index');
           
        });
    });
    
require __DIR__.'/auth.php';
