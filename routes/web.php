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

Route::group(['prefix' => 'team'], function () {
    Route::get('/all', function () {
        return view('pages.teams.general', ['activeSection' => 'all', 'test' => 'all teams']);
    })->name('team.all');

    Route::get('/active', function () {
        return view('pages.teams.general', ['activeSection' => 'active', 'test' => 'active teams']);
    })->name('team.active');

    Route::get('/inactive', function () {
        return view('pages.teams.general', ['activeSection' => 'inactive', 'test' => 'inactive teams']);
    })->name('team.inactive');
});

Route::group(['prefix' => 'ticket'], function () {
    Route::get('/all', function () {
        return view('pages.tickets.general', ['activeSection' => 'all', 'test' => 'all tickets']);
    })->name('ticket.all');

    Route::get('/active', function () {
        return view('pages.tickets.general', ['activeSection' => 'active', 'test' => 'active tickets']);
    })->name('ticket.active');

    Route::get('/pending', function () {
        return view('pages.tickets.general', ['activeSection' => 'pending', 'test' => 'pending tickets']);
    })->name('ticket.pending');

    Route::get('/closed', function () {
        return view('pages.tickets.general', ['activeSection' => 'closed', 'test' => 'closed tickets']);
    })->name('ticket.closed');
});


Route::group(['prefix' => 'relief'], function () {
    Route::get('/shelter', function () {
        return view('pages.reliefs.shelters');
    })->name('relief.shelter');

    Route::get('/hospital', function () {
        return view('pages.reliefs.hospitals');
    })->name('relief.hospital');

    Route::get('/demand-of-resource', function () {
        return view('pages.reliefs.demand-of-resources');
    })->name('relief.demand-of-resource');
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
