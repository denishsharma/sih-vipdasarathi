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
