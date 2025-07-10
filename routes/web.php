<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    BlogController,
    ContentController,
    RoleController,
    ServiceController,
    SettingController,
    ShortcodeController,
    UserController,
    DashboardController,
    CategoryController,
    AboutController
};
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Auth routes (loaded once only)
Auth::routes();

// Avoid duplicate route declarations
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Frontend routes
Route::get('/', [FrontendController::class, 'index']);
Route::post('/sendEmail', [FrontendController::class, 'sendEmail']);
Route::get('/translated-service', [ServiceController::class, 'showTranslatedService']);
Route::get('category', [FrontendController::class, 'category']);
Route::get('view-category/{slug}', [FrontendController::class, 'viewcategory']);
Route::get('category/{service_slug}{slug}', [FrontendController::class, 'serviceview']);
Route::get('blog', [FrontendController::class, 'category']);
Route::get('blog/{slug}', [FrontendController::class, 'blogtails']);
Route::get('blog/tag/{tag}', [FrontendController::class, 'showByTag']);
Route::get('/contact', [FrontendController::class, 'contactdetails']);

// Admin routes
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    // User & Role Management
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::put('/update-user/{id}', [UserController::class, 'updateUserRole'])->name('update-user');
    Route::put('/users/{id}/update-role', [UserController::class, 'updateRole'])->name('users.update-role');
    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy'])->name('roles.delete');
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permissions');
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);
    Route::get('/check-permissions', function () {
        $user = \App\Models\User::find(1);
        return $user->getPermissionNames();
    });

    // Settings
    Route::get('/settings', [SettingController::class, 'index']);
    Route::post('/settings', [SettingController::class, 'savedata']);

    // Category
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('add', [CategoryController::class, 'create']);
        Route::post('add', [CategoryController::class, 'store']);
        Route::get('edit/{category_id}', [CategoryController::class, 'edit']);
        Route::put('update/{category_id}', [CategoryController::class, 'update']);
        Route::get('delete/{category_id}', [CategoryController::class, 'destroy']);
    });

    // About
    Route::prefix('about')->group(function () {
        Route::get('/', [AboutController::class, 'index']);
        Route::get('add', [AboutController::class, 'create']);
        Route::post('add', [AboutController::class, 'store']);
        Route::get('edit/{about_id}', [AboutController::class, 'edit']);
        Route::put('update/{about_id}', [AboutController::class, 'update']);
        Route::get('delete/{about_id}', [AboutController::class, 'destroy']);
    });

    // Service
    Route::prefix('service')->group(function () {
        Route::get('/', [ServiceController::class, 'index']);
        Route::get('add', [ServiceController::class, 'add']);
        Route::post('add', [ServiceController::class, 'store']);
        Route::get('edit/{service_id}', [ServiceController::class, 'edit']);
        Route::put('update/{service_id}', [ServiceController::class, 'update']);
        Route::get('delete/{service_id}', [ServiceController::class, 'destroy']);
    });

    // Shortcodes
    Route::prefix('shortcode')->group(function () {
        Route::get('/', [ShortcodeController::class, 'index'])->name('shortcode.index');
        Route::get('add', [ShortcodeController::class, 'create'])->name('shortcode.create');
        Route::post('/', [ShortcodeController::class, 'store'])->name('shortcode.store');
        Route::get('{id}/edit', [ShortcodeController::class, 'edit'])->name('shortcode.edit');
        Route::put('{id}', [ShortcodeController::class, 'update'])->name('shortcode.update');
        Route::delete('{id}', [ShortcodeController::class, 'destroy'])->name('shortcode.delete');
        Route::post('updatestatus', [ShortcodeController::class, 'updateStatus'])->name('shortcode.updatestatus');
    });

    // Content and Blog
    Route::resource('pages', ContentController::class);
    Route::post('pages/updatestatus', [ContentController::class, 'updateStatus'])->name('item.updatestatus');
    Route::resource('blogs', BlogController::class);
});
