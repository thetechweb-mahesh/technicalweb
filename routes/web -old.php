<?php

use App\Http\Controllers\Admin\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ShortcodeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RoleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.token');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


Auth::routes();

// Route::get('/lang/{locale}', function ($locale) {
//     session(['locale' => $locale]);
//     return redirect()->back(); // or to any route you like
// });
Route::get('/translated-service', [ServiceController::class, 'showTranslatedService']);




 //Users roles and Permmisions
    Route::get('/users', [UserController::class, 'index'])->name('user.admin');
    Route::get('/edit/{id}',[UserController::class, 'edit']);   
    Route::put('/users/{id}/update-role', [UserController::class, 'updateRole'])->name('users.update-role');    

    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy'])->name('roles.delete');
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permissions');
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    Route::get('/check-permissions', function () {
    $user = \App\Models\User::find(1);
    return $user->getPermissionNames();
});

    //End Here Users roles and Permmisions
   

// Route::fallback([HomeController::class, 'handleNotFound']);
// Correct way to define custom named routes without conflicting with Laravel's default names
// Route::get('custom-password-reset', 'PasswordResetController@showResetForm')->name('custom.password.reset');

// // Define custom password reset route with a unique name
// Route::get('custom-password-reset', 'PasswordResetController@showResetForm')->name('custom.password.reset');
// Keep this
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// // Change this
// Route::get('custom-password/reset', [CustomController::class, 'showForm'])->name('custom.password.request');


Route::get('/',[FrontendController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);

 Route::post('/sendEmail',[App\Http\Controllers\Frontend\FrontendController::class,'sendEmail']);


Route::get('category',[App\Http\Controllers\Frontend\FrontendController::class,'category']);
Route::get('view-category/{slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewcategory']);
Route::get('category/{service_slug}{slug}',[App\Http\Controllers\Frontend\FrontendController::class,'serviceview']);

Route::get('blog',[App\Http\Controllers\Frontend\FrontendController::class,'category']);
Route::get('blog/{slug}',[App\Http\Controllers\Frontend\FrontendController::class,'blogtails']);
Route::get('/blog/{tag}', [App\Http\Controllers\Frontend\FrontendController::class, 'showByTag']);

Route::get('/contact',[App\Http\Controllers\Frontend\FrontendController::class,'contactdetails']);


    Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){

    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
    //users 
    Route::get('/users',[UserController::class, 'index']);
    Route::get('/edit/{id}',[UserController::class, 'edit']);
    Route::put('update-user/{id}', [UserController::class, 'updateUserRole'])->name('update-user');


 
 

    //setting 
    Route::get('/settings',[SettingController::class, 'index']);
    Route::post('/settings',[SettingController::class, 'savedata']);

    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('about',[App\Http\Controllers\Admin\AboutController::class,'index']);
    Route::get('add-about',[App\Http\Controllers\Admin\AboutController::class,'create']);
    Route::post('add-about',[App\Http\Controllers\Admin\AboutController::class,'store']);


    Route::get('edit-about/{about_id}',[App\Http\Controllers\Admin\AboutController::class,'edit']);
    Route::put('update-about/{about_id}',[App\Http\Controllers\Admin\AboutController::class,'update']);
    Route::get('delete-about/{about_id}',[App\Http\Controllers\Admin\AboutController::class,'destroy']);


    Route::get('service',[App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('add-service',[App\Http\Controllers\Admin\ServiceController::class, 'add']);
    Route::post('add-service',[App\Http\Controllers\Admin\ServiceController::class, 'store']);

    Route::get('edit-service/{service_id}',[App\Http\Controllers\Admin\ServiceController::class, 'edit']);
    Route::put('update-service/{service_id}',[App\Http\Controllers\Admin\ServiceController::class, 'update']);
    Route::get('delete-service/{service_id}',[App\Http\Controllers\Admin\ServiceController::class,'destroy']);

    // shortcodeController Routes
    Route::get('/shortcode', [ShortcodeController::class, 'index'])->name('shortcode.index');     
    Route::get('/add', [ShortcodeController::class, 'create'])->name('shortcode.create');
    Route::post('/shortcode', [ShortcodeController::class, 'store'])->name('shortcode.store');  
    Route::get('/shortcode/{id}/edit', [ShortcodeController::class, 'edit'])->name('shortcode.edit');
    Route::put('/shortcode/{id}', [ShortcodeController::class, 'update'])->name('shortcode.update');
    Route::delete('/shortcode/{id}', [ShortcodeController::class, 'destroy'])->name('shortcode.delete');   
    Route::post('/shortcode/updatestatus', [ShortcodeController::class, 'updateStatus'])->name('shortcode.updatestatus');
     // shortcodeController End Routes

        // ContentController
    Route::resource('/pages', ContentController::class);
    Route::post('/pages/updatestatus', [ContentController::class, 'updateStatus'])->name('item.updatestatus');
    Route::resource('/blogs', BlogController::class);

});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
