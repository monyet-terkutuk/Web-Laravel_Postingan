<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where y   ou can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name"  => "Gabriel Yonathan",
        "email" => "gabrielxjonathan.12@gmail.com",
        "nim"   => 21110395,
        "image" => "image/aku1.jpg"
    ]);
});



Route::get('/post', [PostController::class, 'index']);

// single Post
Route::get('/post/{post:slug}', [PostController::class, 'show']);


Route::get('/Categories', function () {
    return view('categories', [
        'title' => 'All Category',
        "active" => 'categories',
        "categories" => Category::all()

    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// except berfungsi agar method show tidak digunakan
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// // route untuk slug otomatis
// Route::resource('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);




// Route::get('/Categories/{category:slug}', function (Category $category) {
//     return view('post', [
//         'title' => "Post By Category : $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('Author', 'category'),
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('post', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'authors',
//         'posts' => $author->posts->load('category', 'Author'),
//     ]);
// });
