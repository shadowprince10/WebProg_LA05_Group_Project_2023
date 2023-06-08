<?php

use App\Models\AppUser;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Courier;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Shipping;
use App\Models\Transaction;
use App\Models\WishlistProduct;

use App\Http\Controllers\WishlistController;

use Illuminate\Support\Facades\Route;

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

// dengan use App\Http\Controllers\PageController di paling atas untuk mengakses fungsi di PageController untuk view page dan fitur dari aplikasi



Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::prefix('/product')->group (function () {
    Route::prefix('/{productID}/cart') -> group (function ($productID) {
        Route::get('/', [CartController::class, 'viewCart'])->name('cart.view');
        Route::get('/add', [CartController::class, 'addToCart'])->name('cart.add');
        Route::get('/remove', [CartController::class, 'removeFromCart'])->name('cart.delete');
    });
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::prefix('/auth') -> group (function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/login', function () {
        return view('login');
    })->name('login');
});

Route::prefix('/checkout') -> group (function () {
    Route::get('/', function() {
        return view('checkout');
    })->name('checkout');

    Route::get('/success', function () {
        return view('payment-success');
    })->name('payment.success');

    Route::get('/summary', function () {
        return view('payment-summary');
    })->name('payment.summary');
});

Route::prefix('/order/{orderID}', function ($orderID) {
    Route::get('/', function() {
        return view('order');
    })->name('order');

    Route::get('/details', function() {
        return view('order-detail');
    })->name('order.detail');
});


// Route::get('/register', [App\Http\Controllers\PageController::class, 'register']);
// atau
// Route::get('/register', [PageController::class, 'register']); // dengan use App\Http\Controllers\PageController di paling atas




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']) -> name('home');
