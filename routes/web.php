<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Eka Nazar Fajriansyah",
        "email" => "ekanazarfajriansyah@gmail.com",
        "image" => "pp.png"
    ]);
});

Route::get('/blog', 'PostController@index');
Route::get('posts/{post}', 'PostController@show');

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category}', function(Category $category) {
    return view('posts', [
        "title" => "Post By Category : $category->name",
        "posts" => $category->posts
    ]);
});

Route::get('authors/{author}', function(User $author) {
    return view('posts', [
        "title" => "Post By Author : $author->name",
        "posts" => $author->posts
    ]);
});