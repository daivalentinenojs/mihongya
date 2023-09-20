<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\Auth\AuthController;
use App\Http\Controllers\Guest\Home\HomeController;
use App\Http\Controllers\Guest\About\AboutController;
use App\Http\Controllers\Guest\Services\ServicesController;
use App\Http\Controllers\Guest\Portfolios\PortfoliosController;
use App\Http\Controllers\Guest\Gallery\GalleryController;
use App\Http\Controllers\Guest\Pricing\PricingController;
use App\Http\Controllers\Guest\Events\EventsController;
use App\Http\Controllers\Guest\Blog\BlogController;
use App\Http\Controllers\Guest\Contact\ContactController;

use App\Http\Controllers\User\Dashboard\DashboardController;
use App\Http\Controllers\User\Profile\ProfileController;
use App\Http\Controllers\User\User\UserController;
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

Route::redirect('/', 'en');

Route::group(['prefix' => '{language}'], function() {
    Route::group(['prefix' => 'user', 'middleware' => 'user'], function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'IndexDashboardUser'])->name('dashboard-user');

        // Profile
        Route::get('profile-user', [ProfileController::class, 'IndexProfileUser'])->name('profile-user');
        Route::post('profile-user', [ProfileController::class, 'IndexEditProfileUser'])->name('edit-profile-user'); 
    });
    
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'IndexDashboardAdmin'])->name('dashboard-admin');

        // Profile
        Route::get('profile-admin', [ProfileController::class, 'IndexProfileAdmin'])->name('profile-admin');
        Route::post('profile-admin', [ProfileController::class, 'IndexEditProfileAdmin'])->name('edit-profile-admin'); 

        Route::group(['prefix' => 'master-data'], function () {
            Route::get('user', [UserController::class, 'IndexGetUsers'])->name('get-users');
            Route::get('user/{id}', [UserController::class, 'IndexGetUser'])->name('get-user');
            Route::post('user', [UserController::class, 'IndexPostUser'])->name('post-user');
            Route::post('user/{id}', [UserController::class, 'IndexPutUser'])->name('put-user');
            Route::delete('user/{id}', [UserController::class, 'IndexDeleteUser'])->name('delete-user');
        });
    });

    Route::group(['prefix' => ''], function () {
        // Log In
        Route::get('login', [AuthController::class, 'IndexLogIn'])->name('login');
        Route::post('login', [AuthController::class, 'LoginUser'])->name('login-user'); 

        // Register
        Route::get('register', [AuthController::class, 'IndexRegister'])->name('register');
        Route::post('register', [AuthController::class, 'RegisterUser'])->name('register-user'); 

        // Forget Password
        Route::get('forget-password', [AuthController::class, 'IndexForgetPassword'])->name('forget-password');
        
        // Reset Password
        Route::get('reset-password', [AuthController::class, 'IndexResetPassword'])->name('reset-password');

        // Log Out
        Route::get('logout', [AuthController::class, 'IndexLogOut'])->name('logout');
        
        // Home
        Route::get('/', [HomeController::class, 'IndexHome'])->name('home');

        // About
        Route::get('about', [AboutController::class, 'IndexAbout'])->name('about');
        Route::get('team', [AboutController::class, 'IndexTeam'])->name('team');    
        Route::get('testimonials', [AboutController::class, 'IndexTestimonials'])->name('testimonials');
        Route::get('faqs', [AboutController::class, 'IndexFAQs'])->name('faqs');

        // Services
        Route::get('services', [ServicesController::class, 'IndexServices'])->name('services');

        // Portfolios
        // Route::get('portfolios', [PortfoliosController::class, 'IndexPortfolios'])->name('portfolios');

        // Gallery
        // Route::get('gallery', [GalleryController::class, 'IndexGallery'])->name('gallery');

        // Pricing
        Route::get('pricing', [PricingController::class, 'IndexPricing'])->name('pricing');
        Route::post('pricing', [PricingController::class, 'SendQuote'])->name('send-quote'); 

        // Event
        // Route::get('events', [EventsController::class, 'IndexEvents'])->name('events');  
        
        // Blog
        // Route::get('blog', [BlogController::class, 'IndexBlog'])->name('blog');  

        // Contact
        Route::get('contact', [ContactController::class, 'IndexContact'])->name('contact');  
        Route::post('contact', [ContactController::class, 'SendEmail'])->name('send-email'); 
    });
});
