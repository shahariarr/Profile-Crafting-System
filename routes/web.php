<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactDataController;
use App\Http\Controllers\SubscriptionController;
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




    Route::get('/skills/create', [SkillController::class, 'create'])->name('skills.create');
    Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
    Route::get('/skills/edit', [SkillController::class, 'edit'])->name('skills.edit');
    Route::put('/skills', [SkillController::class, 'update'])->name('skills.update');


    Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::get('subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
    Route::post('subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');
    Route::get('subscriptions/{id}/edit', [SubscriptionController::class, 'edit'])->name('subscriptions.edit');
    Route::put('subscriptions/{id}', [SubscriptionController::class, 'update'])->name('subscriptions.update');



    Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');



    Route::get('education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('education', [EducationController::class, 'store'])->name('education.store');
    Route::get('education/edit', [EducationController::class, 'edit'])->name('education.edit');
    Route::put('education', [EducationController::class, 'update'])->name('education.update');


    // Experience Routes
    Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/experience/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::put('/experience/update', [ExperienceController::class, 'update'])->name('experience.update');



    // Project Routes
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/project/update', [ProjectController::class, 'update'])->name('project.update');




    Route::get('/profile', [ShowController::class, 'show'])->name('sidebar');








});





























Route::middleware(['auth', 'admin-access'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');



});





