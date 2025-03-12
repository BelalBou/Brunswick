<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Menus;
use App\Livewire\Cart;
use App\Livewire\Orders;
use App\Livewire\MenusCarriedAway;
use App\Livewire\ManageUsers;
use App\Livewire\ManageSuppliers;
use App\Livewire\ManageCategories;
use App\Livewire\ManageMenuSizes;
use App\Livewire\ManageAllergies;
use App\Livewire\ManageExtras;
use App\Livewire\ManageMenus;
use App\Livewire\ManageSettings;
use App\Livewire\Account;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Menus
    Route::get('/menus', Menus::class)->name('menus');
    Route::get('/menus/{id}', Menus::class)->name('menus.show');

    // Cart
    Route::get('/cart', Cart::class)->name('cart');
    Route::get('/cart/{id}', Cart::class)->name('cart.show');

    // Orders
    Route::get('/orders', Orders::class)->name('orders');
    Route::get('/orders/{id}', Orders::class)->name('orders.show');

    // Menus Carried Away
    Route::get('/menus-carried-away', MenusCarriedAway::class)->name('menus-carried-away');

    // Account
    Route::get('/account', Account::class)->name('account');

    // Management Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/manage-users', ManageUsers::class)->name('manage-users');
        Route::get('/manage-suppliers', ManageSuppliers::class)->name('manage-suppliers');
        Route::get('/manage-categories', ManageCategories::class)->name('manage-categories');
        Route::get('/manage-menu-sizes', ManageMenuSizes::class)->name('manage-menu-sizes');
        Route::get('/manage-allergies', ManageAllergies::class)->name('manage-allergies');
        Route::get('/manage-extras', ManageExtras::class)->name('manage-extras');
        Route::get('/manage-menus', ManageMenus::class)->name('manage-menus');
        Route::get('/manage-settings', ManageSettings::class)->name('manage-settings');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
