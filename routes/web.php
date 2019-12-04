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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/recommendation', function () {
    return view('recommendation');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/login', function () {
    return view('login');
});

Route::resource('skills','SkillsController');

Route::resource('signup','SignupController');

Route::resource('contact','ContactController');

Route::resource('portfolio','PortfolioController');

Route::resource('hire_me','Hire_meController');

Route::resource('edu','EduController');