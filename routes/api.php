<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\user\DeviceController;
use App\Http\Controllers\Api\user\RoomController;
use App\Http\Controllers\Api\user\TypeController;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\user\ESPController;
use App\Http\Controllers\Api\user\SubUserController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;



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

Route::middleware('auth:user')->get('/user', function (Request $request) {
    return $request->user();
});
