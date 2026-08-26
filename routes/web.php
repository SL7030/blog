<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

use function Pest\Laravel\postJson;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/{post}', [PostController::class,'show']);

;   

