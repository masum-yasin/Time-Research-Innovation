<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationQualificationController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [FrontendController::class, 'frontendShowAbout'])->name('frontend.show');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
// });

// Admin Route//

Route::middleware(['auth','roles:admin'])->group(function(){

Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
Route::get('admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('admin/profile',[AdminController::class, 'AdminProfile'])->name('admin.profile');
Route::post('admin/profile/store',[AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('admin/change/password',[AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
Route::post('admin.password.updated',[AdminController::class, 'AdminPasswordUpdated'])->name('admin.password.updated');

});
// Admin Login

Route::get('admin/login',[AdminController::class, 'AdminLogin'])->name('admin.login');

// Protfolio About Route

Route::controller(AboutController::class)->group(function(){
Route::get('/about/create','create')->name('about.create');
Route::post('/about/store','store')->name('about.store');
Route::get('about/index', 'index')->name('about.index');
Route::get('about/edit/{id}', 'edit')->name('about.edit');
Route::post('about/update/{id}', 'update')->name('about.update');
Route::get('about/delete/{id}', 'delete')->name('about.delete');
});
// Our Service Route

Route::controller(ServiceController::class)->group(function(){
    Route::get('service/create', 'create')->name('service.create');
    Route::post('service/store', 'store')->name('service.store');
    Route::get('service/index', 'index')->name('service.index');
    Route::get('service/edit/{id}', 'edit')->name('service.edit');

    Route::post('service/update/{id}', 'update')->name('service.update');
    Route::get('service/delete/{id}', 'delete')->name('service.delete');
});
// Our Project Route


Route::controller(ProjectController::class)->group(function(){
    Route::get('project/create', 'create')->name('project.create');
    Route::post('project/store', 'store')->name('project.store');
    Route::get('project/index', 'index')->name('project.index');
    Route::get('project/edit/{id}', 'edit')->name('project.edit');

    Route::post('project/update/{id}', 'update')->name('project.update');
    Route::get('project/delete/{id}', 'delete')->name('project.delete');
});
// Our Education Route
Route::controller(EducationQualificationController::class)->group(function(){
    Route::get('education/create', 'create')->name('education.create');
    Route::post('education/store', 'store')->name('education.store');
    Route::get('education/index', 'index')->name('education.index');
    Route::get('education/edit/{id}', 'edit')->name('education.edit');

    Route::post('education/update/{id}', 'update')->name('education.update');
    Route::get('education/delete/{id}', 'delete')->name('education.delete');
});
// Our Client Route
Route::controller(ClientController::class)->group(function(){
    Route::get('client/create', 'create')->name('client.create');
    Route::post('client/store', 'store')->name('client.store');
    Route::get('client/index', 'index')->name('client.index');
    Route::get('client/edit/{id}', 'edit')->name('client.edit');

    Route::post('client/update/{id}', 'update')->name('client.update');
    Route::get('client/delete/{id}', 'delete')->name('client.delete');
});

Route::controller(ContactController::class)->group(function(){
    
    Route::get('contact/index', 'index')->name('contact.index');
   
    Route::get('contact/delete/{id}', 'delete')->name('contact.delete');
});

require __DIR__.'/auth.php';
