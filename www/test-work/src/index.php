<?php

use Kenpachi\TestWork\Component\Route;
use Kenpachi\TestWork\Controller\HomeController;
use Kenpachi\TestWork\Controller\LoginController;
use Kenpachi\TestWork\Controller\ProfileController;
use Kenpachi\TestWork\Controller\RegisterController;

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

session_start();

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/edit', [ProfileController::class, 'edit']);
Route::post('/profile', [ProfileController::class, 'update']);
Route::get('/profile/password', [ProfileController::class, 'password']);
Route::post('/profile/change-password', [ProfileController::class, 'changePassword']);

Route::run();