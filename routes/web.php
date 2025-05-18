<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeachesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContinentsController;
use App\Http\Controllers\HomeListController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\NationsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/getmydata', [MyController::class, 'index']);

Route::post('/login',[ AuthController::class, 'login' ]);
Route::post('/register',[ AuthController::class, 'register' ]);
Route::get('/logout',[ AuthController::class, 'logout' ]);



Route::get('/api/products', [ProductsController::class, 'index']);
Route::delete('/api/products/{id}', [ProductsController::class, 'destroy']);
Route::post('/api/products', [ProductsController::class, 'store']);
Route::put('/api/products/{id}', [ProductsController::class, 'update']);


Route::get('/api/beaches/paginate', [BeachesController::class, 'allToPaginate']);
Route::get('/api/beach', [BeachesController::class, 'index']);

Route::post('api/beach', [BeachesController::class, 'store']);

Route::get('/api/beach/{id}', [BeachesController::class, 'show']);

Route::get('/api/nations', [NationsController::class, 'index']);

Route::get('/api/home', [HomeListController::class, 'index_Home']);

Route::get('/api/beachimg/{id}', [BeachesController::class, 'show_library']);

Route::get('/api/continent', [BeachesController::class, 'continent_index']);

Route::get('/api/continent/{continent}', [BeachesController::class, 'continent_filter']);

Route::get('/api/beachjoin', [BeachesController::class, 'beachjoin']);
//Route::get('/api/login', [LoginController::class, 'index']);
Route::put('/api/beach/{id}', [BeachesController::class, 'update']);

Route::post('/api/continent', [ContinentsController::class, 'store']);
Route::get('/api/continent', [ContinentsController::class, 'index']);

Route::post('api/comments', [CommentsController::class, 'store']);

Route::get('api/comments/{beachid}', [CommentsController::class, 'findByBeachId']);

Route::get('api/beachbynation/{nationid}', [BeachesController::class, 'beach_by_nation_id']);

Route::post('api/upload', [ImageController::class, 'uploader']);
Route::get('api/reviews/{beachid}', [ImageController::class, 'findByBeachId']);

Route::get('api/beach_re/{id}', [BeachesController::class, 'showRe']);
Route::get('api/limit/{id}', [BeachesController::class, 'limit']);
Route::get('api/test', [BeachesController::class, 'noParamTest']);

Route::get('api/user/{id}', [AuthController::class, 'getUserById']);

Route::delete('api/beach/{id}', [BeachesController::class, 'destroy']);