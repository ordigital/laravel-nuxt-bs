<?php
use Illuminate\Support\Facades\Route;
Route::get('/{path}', '\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class)->name('nuxt')->where('path', '^(?!api).*$');
