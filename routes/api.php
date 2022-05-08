<?php

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

Route::get("/", function () {
    return response()->json(
        [
            "status" => 200,
            "success" => true,
            "message" => "Bienvenue",
            "data" => [
                "service" => "News Api",
                "version" => "1.0",
                "langue" => app()->getLocale(),
                "support" => "contact@ferreirarafael.com"
            ]
        ]
    );
});
