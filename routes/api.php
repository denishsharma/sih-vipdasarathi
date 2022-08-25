<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks/types', function () {
    return \App\Models\TaskType::query()
                               ->select(['id', 'name'])
                               ->orderBy('name')
                               ->when(
                                   request()->has('search'),
                                   fn(\Illuminate\Contracts\Database\Eloquent\Builder $query) => $query
                                       ->where('name', 'like', '%' . request()->input('search') . '%')
                               )->get();
})->name('api.tasks.types');

Route::get('/organizations/all', function () {
    return \App\Models\Organization::query()
                                   ->select(['id', 'name', 'signature'])
                                   ->orderByDesc('created_at')
                                   ->when(
                                       request()->has('search'),
                                       fn(\Illuminate\Contracts\Database\Eloquent\Builder $query) => $query
                                           ->where('name', 'like', '%' . request()->input('search') . '%')
                                           ->orWhere('level', 'like', '%' . request()->input('search') . '%')
                                   )->get();
})->name('api.organizations.all');

Route::get('/disaster/types/all', function () {
    return \App\Models\DisasterType::query()
                                   ->select(['id', 'name', 'signature'])
                                   ->orderByDesc('created_at')
                                   ->when(
                                       request()->has('search'),
                                       fn(\Illuminate\Contracts\Database\Eloquent\Builder $query) => $query
                                           ->where('name', 'like', '%' . request()->input('search') . '%')
                                   )->get();
})->name('api.disaster.types.all');

Route::get('/country/states/', function () {
    $country = \App\Models\Country::where('name', 'india')->first();
    return \App\Models\State::query()
                            ->select(['id', 'name'])
                            ->where('country_id', $country->id)
                            ->orderBy('name')
                            ->when(
                                request()->has('search'),
                                fn(\Illuminate\Contracts\Database\Eloquent\Builder $query) => $query
                                    ->where('name', 'like', '%' . request()->input('search') . '%')
                                    ->where('country_id', $country->id)
                            )->get()->map(fn($state) => [
                                'id' => $state->id,
                                'name' => ucwords($state->name),
                                'country_id' => $state->country_id,
                            ]);
})->name('api.country.states');
