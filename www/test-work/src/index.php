<?php

use Kenpachi\TestWork\Component\Route;
use Kenpachi\TestWork\Controller\HomeController;
use Kenpachi\TestWork\Controller\RegisterController;

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::run();