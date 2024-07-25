<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactDataController;
use App\Http\Controllers\ProfessionalSummaryController;







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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access'])->group(function () {

    Route::get('/home', [HomeController::class, 'Employee'])->name('home');
    // Route::view('/PersonalInfo','UserProfile.PersonalInfo');
    // Route::view('/ProfessionalSummary','UserProfile.ProfessionalSummary');
    // Route::view('/Contact','UserProfile.Contact');
    Route::view('/Skill','UserProfile.Skill');
    Route::view('/Education','UserProfile.Education');
    Route::view('/Experience','UserProfile.Experience');
    Route::view('/Project','UserProfile.Project');
    Route::view('/BlogPost','UserProfile.BlogPost');


    //frontend
    route::view('/about','front-end.pages.about');
    route::view('/contact','front-end.pages.contact');
    route::view('/portfolio','front-end.pages.portfolio');
    route::view('/blog','front-end.pages.blog');
    route::view('/resume','front-end.pages.resume');



    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


    Route::get('/professional-summary/create', [ProfessionalSummaryController::class, 'create'])->name('professional-summary.create');
    Route::post('/professional-summary/store', [ProfessionalSummaryController::class, 'store'])->name('professional-summary.store');
    Route::get('/professional-summary/edit', [ProfessionalSummaryController::class, 'edit'])->name('professional-summary.edit');
    Route::put('/professional-summary/update', [ProfessionalSummaryController::class, 'update'])->name('professional-summary.update');



    Route::get('/contact-data/create', [ContactDataController::class, 'create'])->name('contact-data.create');
    Route::post('/contact-data/store', [ContactDataController::class, 'store'])->name('contact-data.store');
    Route::get('/contact-data/edit', [ContactDataController::class, 'edit'])->name('contact-data.edit');
    Route::put('/contact-data/update', [ContactDataController::class, 'update'])->name('contact-data.update');


    Route::get('/blog/create', [BlogPostController::class, 'create'])->name('blog-post.create');
    Route::post('/blog/store', [BlogPostController::class, 'store'])->name('blog-post.store');
    Route::get('/blog/edit/{id}', [BlogPostController::class, 'edit'])->name('blog-post.edit');
    Route::put('/blog/update/{id}', [BlogPostController::class, 'update'])->name('blog-post.update');
    Route::get('/blogX', [BlogPostController::class, 'index'])->name('blog-post.index');
    Route::delete('/blog/{id}', [BlogPostController::class, 'destroy'])->name('blog-post.destroy');




});



























/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/



// Route::middleware(['auth', 'admin-access'])->group(function () {

//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');



// });

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/



// Route::middleware(['auth', 'manager-access'])->group(function () {

//     Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');


// });
