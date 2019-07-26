<?php

use App\Affiliation;
use App\Collection;
use App\Post;
use App\Serie;
use App\Tag;
use App\User;
use App\Video;

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
    $affiliation = Affiliation::find(2);
    $series = Serie::first();
    $collection = Collection::first();
    $video = Video::find(2);
    dd($video->watchable);
    // $affiliation->posts;
    // $post->tags()->attach($tag);
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
