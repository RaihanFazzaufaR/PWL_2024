<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

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


//basic routing praktikum
// Route::get('/hello', function(){
//     return 'Hello World';
// });

// Route::get('/world', function(){
//     return 'world';
// });

// Route::get('/', function(){
//     return 'Selamat Datang';
// });

// Route::get('/about', function(){
//     return 'Nama saya <b>Raihan Fazzaufa Rasendriya</b>
//             <br>NIM saya <b>2241720201</b>';
// });


// Route Parameter Praktikum
// Route::get('/user/{name}', function ($name){
//     return 'Nama saya ' .$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Post ke-' .$postId. ' Komentar ke-: ' .$commentId;
});

Route::get('/articles/{id}', function ($id){
    return 'Halaman artikel dengan ID ' .$id;
});


//Optional Parameter Praktikum
// Route::get('/user/{name?}', function($name=null){
//     return 'Nama saya ' .$name;
// });

// Route::get('/user/{name?}', function($name='John'){
//     return 'Nama saya ' .$name;
// });


//Route Name Praktikum
Route::get('/user/profile', function(){
    // 
})->name('profile');


// Route Group dan Route Prefixes Praktikum
// Route Group
// Route::middleware(['first', 'second'])->group(function(){
    
// });

// Route::get('/user/profile', function(){
//     // Uses first & second Middleware
// });

// Route::domain('{account}.example.com')->group(function(){
//     Route::get('user/{id}', function($account, $id){
//         // Uses first & second Middleware
//     });
// });

// Route::middleware('auth')->group(function(){
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// // Route Prefixes
// Route::prefix('admin')->group(function(){
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });


// //Redirect Route Praktikum
// Route::redirect('/here', '/there');

// //View Route Praktikum
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


//Membuat Controller Praktikum
// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);