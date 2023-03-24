<?php

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::name('projects.')->prefix('projects')->group(function () {
        Route::get('/{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('show')->can('show', Project::class);
        Route::get('/', [App\Http\Controllers\ProjectController::class, 'index'])->name('index')->can('index', Project::class);
        Route::post('/', [App\Http\Controllers\ProjectController::class, 'store'])->name('store')->can('store', Project::class);
        Route::put('/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('update')->can('update', Project::class);
        Route::delete('/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('destroy')->can('destroy', Project::class);
        }
    );
});
