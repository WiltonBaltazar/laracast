<?php

use App\Article;
use Illuminate\Support\Facades\Route;

//app()->bind('example', function (){
//    $foo = config('services.foo');
//    return new \App\Example($foo);
//});
//
//Route::get('/', 'PagesController@home');

Route::get('/posts/{post}','PostController@show');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/about', function(){

    $articles = App\Article::take(3)->latest()->get();

    return view('about',['articles'=> $articles]);
});

// Route::get('/articles/{article}/','ArticlesController@show');
Route::resource('articles','ArticlesController');

Route::resource('contact', 'ContactController');

