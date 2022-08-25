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

    Route::group(['prefix' => '/organization'], function () {
        Route::get('/', function () {
            return view('pages.settings.organizations');
        })->name('setting.organization');

        Route::get('/{signature}/overview', function ($signature) {
            return view('pages.settings.organizations.views.overview', ['caseTitle' => 'Test Setting']);
        })->name('setting.organization.view.overview');

        Route::get('/{signature}/permission', function ($signature) {
            return view('pages.settings.organizations.views.permissions', ['caseTitle' => 'Test Setting']);
        })->name('setting.organization.view.permission');

        Route::get('/{signature}/users', function ($signature) {
            return view('pages.settings.organizations.views.users', ['caseTitle' => 'Test Setting']);
        })->name('setting.organization.view.users');
    });


    Route::group(['prefix' => '/user'], function () {

        Route::get('/', function () {
            return view('pages.settings.users');
        })->name('setting.user');

        Route::get('/{signature}/overview', function ($signature) {
            return view('pages.settings.users.views.overview', ['caseTitle' => 'Test Setting']);
        })->name('setting.user.view.overview');

        Route::get('/{signature}/permission', function ($signature) {
            return view('pages.settings.users.views.permission', ['caseTitle' => 'Test Setting']);
        })->name('setting.user.view.permission');

        Route::get('/{signature}/organization', function ($signature) {
            return view('pages.settings.users.views.organization', ['caseTitle' => 'Test Setting']);
        })->name('setting.user.view.organization');
    });




    Route::group(['prefix' => 'sop'], function () {

        Route::get('/', function () {
            return view('pages.settings.sops');
        })->name('setting.sop');

        Route::get('/{signature}/overview', function ($signature) {
            return view('pages.settings.sop.view.overview', ['caseTitle' => 'Test Setting']);
        })->name('setting.sop.view.overview');

        Route::get('/{signature}/DisasterType', function ($signature) {
            return view('pages.settings.sop.view.DisasterType', ['caseTitle' => 'Test Setting']);
        })->name('setting.sop.view.DisasterType');
    });


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

    Route::get('/{signature}/overview', function ($signature) {
        return view('pages.cases.view.overview', ['caseTitle' => 'Test Case']);
    })->name('case.view.overview');

    Route::get('/{signature}/teams', function ($signature) {
        return view('pages.cases.view.teams', ['caseTitle' => 'Test Case']);
    })->name('case.view.teams');

    Route::get('/{signature}/tasks', function ($signature) {
        return view('pages.cases.view.tasks', ['caseTitle' => 'Test Case']);
    })->name('case.view.tasks');

    Route::get('/{signature}/demands', function ($signature) {
        return view('pages.cases.view.demands', ['caseTitle' => 'Test Case']);
    })->name('case.view.demand');

    Route::get('/{signature}/decisions', function ($signature) {
        return view('pages.cases.view.decisions', ['caseTitle' => 'Test Case']);
    })->name('case.view.decisions');

    Route::get('/{signature}/reports', function ($signature) {
        return view('pages.cases.view.reports', ['caseTitle' => 'Test Case']);
    })->name('case.view.reports');

    Route::get('/{signature}/volunteers', function ($signature) {
        return view('pages.cases.view.volunteers', ['caseTitle' => 'Test Case']);
    })->name('case.view.volunteer');

    Route::get('/{signature}/shelters', function ($signature) {
        return view('pages.cases.view.shelters', ['caseTitle' => 'Test Case']);
    })->name('case.view.shelters');

    Route::get('/{signature}/tickets', function ($signature) {
        return view('pages.cases.view.tickets', ['caseTitle' => 'Test Case']);
    })->name('case.view.ticket');
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

    Route::get('/{signature}/overview', function ($signature) {
        return view('pages.teams.view.overview', ['caseTitle' => 'Test Teams']);
    })->name('team.view.overview');
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

    Route::get('/equipments', function () {
        return view('pages.reliefs.equipments');
    })->name('relief.equipments');

    Route::get('/foods', function () {
        return view('pages.reliefs.foods');
    })->name('relief.foods');
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

    Route::get('/{signature}/overview', function ($signature) {
        return view('pages.volunteer.view.overview', ['caseTitle' => 'Test Volunteers']);
    })->name('volunteer.view.overview');
});
