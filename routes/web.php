<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\DataScheduleController;

Route::get('/', function () {
    return view('index');
});
Route::get('/inicio', [ShowController::class, 'mostrarInicio'])->name('inicio');
Route::get('/index', [ShowController::class, 'mostrarIndex'])->name('index');
Route::get('/schedule', [DataScheduleController::class, 'index'])->name('schedule');
Route::get('/schedule-log', [DataScheduleController::class, 'create'])->name('scheduleLog');
Route::post('/schedule-log', [DataScheduleController::class, 'store'])->name('scheduleLog.store');
Route::get('/data-schedules/{dataSchedule}', [DataScheduleController::class, 'show'])->name('data-schedules.show');
Route::get('/data-schedules/{dataSchedule}/edit', [DataScheduleController::class, 'edit'])->name('data-schedules.edit');
Route::put('/data-schedules/{dataSchedule}', [DataScheduleController::class, 'update'])->name('data-schedules.update');
Route::delete('/data-schedules/{dataSchedule}', [DataScheduleController::class, 'destroy'])->name('data-schedules.destroy');