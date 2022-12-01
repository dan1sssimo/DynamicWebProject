<?php

use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\ClientFeedbackController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\BlogController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
})->name('home');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin All Route
Route::middleware(['auth'])->controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

// Home Slide All Route
Route::middleware(['auth'])->controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
});

// About Page All Route
Route::controller(AboutController::class)->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/about/page', 'AboutPage')->name('about.page');
        Route::post('/update/about', 'UpdateAbout')->name('update.about');
        Route::get('/about/multi/image', 'AboutMultiImage')->name('about.multi.image');
        Route::post('/store/multi/image', 'StoreMultiImage')->name('store.multi.image');
        Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image');
        Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
        Route::post('/update/multi/image', 'UpdateMultiImage')->name('update.multi.image');
        Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
    });
    Route::get('/about', 'HomeAbout')->name('home.about');
});

// Portfolio Page All Route
Route::controller(PortfolioController::class)->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
        Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
        Route::post('/store/portfolio', 'StorePortfolio')->name('store.portfolio');
        Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
        Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.portfolio');
        Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
    });
    Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
    Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');
});

// Blog Category All Route
Route::middleware(['auth'])->controller(BlogCategoryController::class)->group(function () {
    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
    Route::post('/update/blog/category', 'UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
});

// Blog All Route
Route::controller(BlogController::class)->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/all/blog', 'AllBlog')->name('all.blog');
        Route::get('/add/blog', 'AddBlog')->name('add.blog');
        Route::post('/store/blog', 'StoreBlog')->name('store.blog');
        Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
        Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
        Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');
    });
    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');
    Route::get('/blog', 'HomeBlog')->name('home.blog');
});

// Footer All Route
Route::middleware(['auth'])->controller(FooterController::class)->group(function () {
    Route::get('/footer/setup', 'FooterSetup')->name('footer.setup');
    Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
});

// Contact All Route
Route::controller(ContactController::class)->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
        Route::get('/contact/message', 'ContactMessage')->name('contact.message');
    });
    Route::get('/contact', 'Contact')->name('contact.me');
    Route::post('/store/message', 'StoreMessage')->name('store.message');
});

// ClientFeedback All Route
Route::middleware(['auth'])->controller(ClientFeedbackController::class)->group(function () {
    Route::get('/all/feedback', 'AllFeedback')->name('all.feedback');
    Route::get('/add/feedback', 'AddFeedback')->name('add.feedback');
    Route::post('/store/feedback', 'StoreFeedback')->name('store.feedback');
    Route::get('/delete/feedback/{id}', 'DeleteFeedback')->name('delete.feedback');
    Route::get('/all/feedback/multi', 'AllFeedbackMulti')->name('all.feedback.multi');
    Route::get('/add/feedback/multi', 'AddFeedbackMulti')->name('add.feedback.multi');
    Route::post('/store/feedback/multi/image', 'StoreFeedbackMultiImage')->name('store.feedback.multi.image');
    Route::get('/edit/feedback/multi/image/{id}', 'EditFeedbackMultiImage')->name('edit.feedback.multi.image');
    Route::post('/update/feedback/multi/image', 'UpdateFeedbackMultiImage')->name('update.feedback.multi.image');
    Route::get('/delete/feedback/multi/image/{id}', 'DeleteFeedbackMultiImage')->name('delete.feedback.multi.image');
});


require __DIR__ . '/auth.php';
