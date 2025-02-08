<?php

use Illuminate\Support\Facades\Route;
// MIDDLEWARE
use App\Http\Middleware\AuthCheckMiddleware;
use App\Http\Middleware\NotBackMiddleware;
use App\Http\Middleware\AuthCheckAdminMiddleware;
use App\Http\Middleware\NotBackAdminMiddleware;
// AUTH USER
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
//AUTH ADMIN
use App\Http\Controllers\dashboard\auth\LoginController as LoginAdminController;
use App\Http\Controllers\dashboard\auth\LogoutController as LogoutAdminController;
// WEB
use App\Http\Controllers\IndexController;
use App\Http\Controllers\pages\ProductDetailController;
use App\Http\Controllers\pages\CheckoutController;
use App\Http\Controllers\pages\ProfileController;
use App\Http\Controllers\pages\SettingsController;
use App\Http\Controllers\pages\ShoppingCartController;
// DASHBOARD
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\ProductsController;
use App\Http\Controllers\dashboard\OrdersController;

/*************************************************************************
 * AUTH USER & ADMIN
 *************************************************************************
 */

/**
 * USER
 */
Route::middleware([AuthCheckMiddleware::class])->group(function () {
    // AUTH USER REGISTER
    Route::get("/register", [RegisterController::class, "viewRegister"])->name("auth.register");
    Route::post("/register", [RegisterController::class, "loginStore"])->name("auth.register.post");

    // AUTH USER LOGIN
    Route::get("/login", [LoginController::class, "viewLogin"])->name("auth.login");
    Route::post("/login", [LoginController::class, "loginStore"])->name("auth.login.post");
});
// AUTH USER LOGOUT
Route::post("/logout", [LogoutController::class, "logout"])->name("auth.logout");

/**
 * ADMIN
 */
Route::middleware([AuthCheckAdminMiddleware::class])->group(function () {
    Route::prefix("/dashboard")->group(function () {
        // AUTH ADMIN LOGIN
        Route::get("/login", [LoginAdminController::class, "viewLogin"])->name("auth.admin.login");
        Route::post("/login", [LoginAdminController::class, "login"])->name("auth.admin.login.post");
    });
});
// AUTH ADMIN LOGOUT
Route::post("/admin/logout", [LogoutAdminController::class, "logout"])->name("auth.admin.logout");

/*************************************************************************
 * WEB
 *************************************************************************
 */

// INDEX
Route::get("/", [IndexController::class, "index"])->name("index");

// PRODUCT DETAILS
Route::get("/product/{id}", [ProductDetailController::class, "productDetail"])->name("page.product.details");
Route::post("/add/cart/{id}", [ProductDetailController::class, "addToCart"])->name("add.to.cart");
Route::delete("/destroy/cart/{id}", [ProductDetailController::class, "destroyCart"])->name("destroy.cart");

Route::middleware([NotBackMiddleware::class])->group(function () {
    // PROFILE
    Route::get("/profile/{id}", [ProfileController::class, "profile"])->name("page.profile");

    // SHOPPING CARD
    Route::get("/shopping-cart", [ShoppingCartController::class, "shoppingCard"])->name("page.shopping.cart");

    // SETTINGS
    Route::get("/settings/{id}/edit", [SettingsController::class, "settings"])->name("page.settings");
    Route::put("/settings/update/profile/{id}", [SettingsController::class, "updateProfile"])->name("page.settings.update.profile");
    Route::put("/settings/update/password/{id}", [SettingsController::class, "updatePassword"])->name("page.settings.update.password");
    Route::delete("/settings/destroy/{id}", [SettingsController::class, "destroy"])->name("page.settings.destroy");

    // CHECKOUT
    Route::get("/checkout", [CheckoutController::class, "checkout"])->name("page.checkout");
    Route::post("/checkout/store", [CheckoutController::class, "checkoutStore"])->name("checkout.store");
});

/*************************************************************************
 * DASHBOARD
 *************************************************************************
 */

Route::prefix("/dashboard")->group(function () {
    Route::middleware([NotBackAdminMiddleware::class])->group(function () {
        // DASHBOARED
        Route::get("/", [DashboardController::class, "dashboard"])->name("dashboard");
        
        // ADMINS
        Route::get("/admin/create", [AdminController::class, "create"])->name("create.admin");
        Route::post("/admin/store", [AdminController::class, "store"])->name("admin.store");
        Route::get("/admin/{id}/edit", [AdminController::class, "edit"])->name("admin.edit");
        Route::put("/admin/update/{id}", [AdminController::class, "update"])->name("admin.update");
        Route::delete("/admin/destroy/{id}", [AdminController::class, "destroy"])->name("admin.destroy");
        
        // PRODUCTS
        Route::get("/product/create", [ProductsController::class, "create"])->name("product.create");
        Route::post("/product/store", [ProductsController::class, "store"])->name("product.store");
        Route::get("/product/{id}/edit", [ProductsController::class, "edit"])->name("product.edit");
        Route::put("/product/update/{id}", [ProductsController::class, "update"])->name("product.update");
        Route::delete("/product/destroy/{id}", [ProductsController::class, "destroy"])->name("product.destroy");

        // ORDERS
        Route::get("/order/{id}/edit", [OrdersController::class, "edit"])->name("order.edit");
        Route::put("/order/update/{id}", [OrdersController::class, "update"])->name("order.update");
        Route::delete("/order/destroy/{id}", [OrdersController::class, "destroy"])->name("order.destroy");
    });
});