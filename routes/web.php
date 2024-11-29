<?php

use App\Http\Controllers\UsercController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GithubController;
use App\Http\Controllers\{
    CustomerController
};

use App\Http\Controllers\{
TableController
};

use App\Http\Controllers\{
    ReserveController
    };

use App\Http\Controllers\{
ReservationController
};

use App\Http\Controllers\Admin\{AuthController,ProfileController,UserController};


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
    return view('welcome');
});


//para autenticar

Route::get('/auth/github', [GithubController::class, 'redirectToGithub'])->name('auth.github');
Route::get('/auth/github/callback', [GithubController::class, 'handleGithubCallback'])->name('auth.github.callback');


Route::get('/users', [UsercController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsercController::class, 'create'])->name('users.create');
Route::post('/users', [UsercController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UsercController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UsercController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UsercController::class, 'destroy'])->name('users.destroy');


Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::get('/', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/', [AuthController::class, 'postLogin'])->name('postLogin');

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
Route::get('/index', [UserController::class, 'index'])->name('user.index');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('/')->with('success', 'Logout efetuado com sucesso');
})->name('logout');
Route::get('/register',[RegisteredUserController::class, 'create'])-> name('create');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('/table', [TableController::class, 'index'])->name('table.index');
Route::get('/table/create', [TableController::class, 'create'])->name('table.create');
Route::post('/table', [TableController::class, 'store'])->name('table.store');
Route::get('/table/{id}/edit', [TableController::class, 'edit'])->name('table.edit');
Route::put('/table/{id}', [TableController::class, 'update'])->name('table.update');
Route::get('/table/{id}', [TableController::class, 'show'])->name('table.show');
Route::delete('/table/{id}', [TableController::class, 'destroy'])->name('table.destroy');

Route::get('/reserve', [ReserveController::class, 'index'])->name('reserve.index');
Route::get('pdf-export', [ReserveController::class, 'exportPdf']);
Route::get('/reserve/create', [ReserveController::class, 'create'])->name('reserve.create');
Route::post('/reserve', [ReserveController::class, 'store'])->name('reserve.store');
Route::get('/reserve/{id}/edit', [ReserveController::class, 'edit'])->name('reserve.edit');
Route::put('/reserve/{id}', [ReserveController::class, 'update'])->name('reserve.update');
Route::get('/reserve/{id}', [ReserveController::class, 'show'])->name('reserve.show');
Route::delete('/reserve/{id}', [ReserveController::class, 'destroy'])->name('reserve.destroy');


Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservation.store');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
//});

require __DIR__.'/auth.php';
