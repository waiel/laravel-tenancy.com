<?php

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

use Illuminate\Http\RedirectResponse;

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home.index'
]);

Route::get('/documentation', [
    'uses' => 'DocumentationController@index',
    'as' => 'docs.index'
]);
Route::get('/documentation/{segment}', [
    'uses' => 'DocumentationController@page',
    'as' => 'docs.page'
])->where(['segment' => '.*']);

Route::get('/chat', function () {
    if ($url = config('discord.invite-link')) {
        return new RedirectResponse($url);
    }

    abort(424);
})->name('chat');

Route::get('/newsletter/signup', function () {
    if ($url = config('newsletter.subscribe-link')) {
        return new RedirectResponse($url);
    }

    abort(424);
})->name('newsletter.signup');