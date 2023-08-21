<?php

use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;

/*** Vendor Routes */
Route::get("dashboard", [VendorController::class, "dashboard"])->name("dashboard");
Route::get("profile", [VendorProfileController::class, "index"])->name("profile");
Route::post("profile", [VendorProfileController::class, "updateProfile"]);
Route::post("password-update", [VendorProfileController::class, "updatePassword"])->name("password.update");
