<?php

use Illuminate\Support\Facades\Route;
// MIDDLEWARE
use App\Http\Middleware\AuthCheckMiddleware;
use App\Http\Middleware\NotBackMiddleware;
use App\Http\Middleware\AuthCheckAdminMiddleware;
use App\Http\Middleware\NotBackAdminMiddleware;
use App\Http\Middleware\AuthRoleMiddleware;
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
use App\Http\Controllers\pages\ShoppingCardController;
// DASHBOARD
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\ProductsController;

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
Route::post("/logout", [LogoutAdminController::class, "logout"])->name("auth.admin.logout");

/*************************************************************************
 * WEB
 *************************************************************************
 */

// INDEX
Route::get("/", [IndexController::class, "index"])->name("index");

// PRODUCT DETAILS
Route::get("/product/{id}", [ProductDetailController::class, "productDetail"])->name("page.product.details");

Route::middleware([NotBackMiddleware::class])->group(function () {
    // PROFILE
    Route::get("/profile/{id}", [ProfileController::class, "profile"])->name("page.profile");

    // SHOPPING CARD
    Route::get("/shopping-card", [ShoppingCardController::class, "shoppingCard"])->name("page.shopping.card");

    // SETTINGS
    Route::get("/settings/{id}/edit", [SettingsController::class, "settings"])->name("page.settings");

    // CHECKOUT
    Route::get("/checkout", [CheckoutController::class, "checkout"])->name("page.checkout");
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

        // MIDDLEWARE ADMIN ROLE
        Route::middleware([AuthRoleMiddleware::class])->group(function () {
            Route::get("/admin/{id}/edit", [AdminController::class, "edit"])->name("admin.edit");
            Route::put("/admin/{id}", [AdminController::class, "update"])->name("admin.update");
            Route::delete("/destroy/{id}", [AdminController::class, "destroy"])->name("admin.destroy");
        });
        
        // PRODUCTS
        Route::get("/product/create", [ProductsController::class, "create"])->name("create.product");
    });
});