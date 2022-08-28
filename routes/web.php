<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AdminBooksController;
use App\Http\Controllers\AdminCatController;
use App\Http\Controllers\AdminBlogsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FavouriteController;

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

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('login.store');   

Route::get('/register', [RegisterController::class,'register'])->name('register');
Route::post('/register', [RegisterController::class,'store'])->name('register.store');

Route::get('/blogs',[BlogsController::class,'index'])->name('blogs.index');
Route::get('/blogs/blogPost',[BlogsController::class,'show'])->name('blog.post');

// categories page

Route::get('/categories',[CategoriesController::class,'index'])->name('categories.index');


Route::get('/', [LoginController::class, 'dashboard'])->name('home');
Route::middleware('auth')->group(function(){
    // if(Auth::User()->role=='1'){
    Route::get('/admin/dashboard',[LoginController::class,'AdminDashboard'])->name('Admin.Dashboard');
    
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    //ADmin page add books
Route::get('/admin/add_books',[AdminBooksController::class,'add_books'])->name('addBooks');
Route::post('/admin/add_books',[AdminBooksController::class,'store'])->name('addBooks.store');
Route::get('/admin/add_categories',[AdminCatController::class,'add_categories'])->name('addCategory');
Route::post('/admin/add_categories',[AdminCatController::class,'store'])->name('addCategory.store');
Route::get('/admin/add_blogs',[AdminBlogsController::class,'add_blogs'])->name('addBlogs');
Route::post('/admin/add_blogs',[AdminBlogsController::class,'store'])->name('addBlogs.store');
Route::get('/admin/blogsTable',[AdminBlogsController::class,'showBlogs'])->name('showBlogs');
Route::get('admin/usersControl',[AdminUsersController::class,'showUsers'])->name('showUsers');


//showbook add reviews
Route::get('/categories/show{id}',[CategoriesController::class,'show'])->name('book.show');
Route::post('/categories/show{id}',[CategoriesController::class,'store'])->name('add_comments');

//favourites book add
// Route::post('/categories/show{id}',[FavouriteController::class,'store'])->name('add_favourites');
});

// contact page

Route::get('/contact',function(){
    return view('contact');
})->name('contact.page');

//books table show

Route::get('/admin/booksTable',[AdminBooksController::class,'showBooks'])->name('showBooksTable');



