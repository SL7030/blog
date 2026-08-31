<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\post;

use function Pest\Laravel\postJson;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/{post}', [PostController::class,'show']);
Route::get('prueba', function(){

        $post = post::find(1);
        return $post->is_active;

        });

        //Crear nuevo post

/*
        $post = new Post;

        $post->title = 'TitUlo de PruEba 4';
        $post->content = 'Contenido de prueba 4';
        $post->categoria = 'Categoria de prueba 4';

        $post->save();

        return $post;
  */

        /*
            Actualizar Registro

            $post = post::where('title','Titulo de prueba 1')
                ->first();

        $post->categoria = 'Desarrollo Web';

        $post->save(); */

        /*
            Listar Todos los posts
            $posts = post::orderBy('categoria', 'asc')
                        ->select('id','title','categoria')
                        ->take(2)
                        ->get();

                return $posts; */

        /* $post = post::find(1);
        $post->delete();

        return "Eliminado correctamente"; */
