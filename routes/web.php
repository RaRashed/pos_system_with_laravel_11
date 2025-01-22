<?php

use App\Http\Controllers\ProfileController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    // $admin = new Admin();
    // $admin->name = "rashed";
    // $admin->email = "admin@admin.com";
    // $admin->password = Hash::make('12345678');
    // $admin->save();
    if (Auth::guard('admin')->check()) {
        return view('dashboard');
    }
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(middleware: ['auth:admin', 'verified'])->name('dashboard');


Route::prefix('admin')->middleware(['auth:admin'])->name('admin.')->group(function () {
    // Admin profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Add other admin routes as needed
});

require __DIR__ . '/auth.php';
