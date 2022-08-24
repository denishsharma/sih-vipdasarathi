<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/home', function () {
    return view('dashboard');
})->name('home');

Route::group(['prefix' => 'setting'], function () {
    Route::get('/general', function () {
        return view('pages.settings.general');
    })->name('setting.general');

    Route::get('/organization', function () {
        return view('pages.settings.organizations');
    })->name('setting.organization');

    Route::get('/user', function () {
        return view('pages.settings.users');
    })->name('setting.user');

    Route::get('/sop', function () {
        return view('pages.settings.sops');
    })->name('setting.sop');

    Route::get('/TaskTypes', function () {
        return view('pages.settings.task-types');
    })->name('setting.task-types');

});


Route::group(['prefix' => 'case'], function () {
    Route::get('/all', function () {
        return view('pages.cases.general', ['activeSection' => 'all', 'test' => 'all cases']);
    })->name('case.all');

    Route::get('/active', function () {
        return view('pages.cases.general', ['activeSection' => 'active', 'test' => 'active cases']);
    })->name('case.active');

    Route::get('/pending', function () {
        return view('pages.cases.general', ['activeSection' => 'pending', 'test' => 'pending cases']);
    })->name('case.pending');

    Route::get('/closed', function () {
        return view('pages.cases.general', ['activeSection' => 'closed', 'test' => 'closed cases']);
    })->name('case.closed');
});


Route::group(['prefix' => 'volunteer'], function () {
    Route::get('/profiles', function () {
        return view('pages.volunteer.profiles');
    })->name('volunteer.profiles');

    Route::get('/tokens', function () {
        return view('pages.volunteer.tokens');
    })->name('volunteer.tokens');

    Route::get('/audits', function () {
        return view('pages.volunteer.audits');
    })->name('volunteer.audits');
});
