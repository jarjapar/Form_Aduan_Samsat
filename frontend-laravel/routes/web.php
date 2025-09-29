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
use App\Services\ApiClient;


Route::get('/test-stats', function (ApiClient $api) {
    return $api->get('stats'); // harus balikin JSON stats dari backend
});

Route::get('/', function () {
    return view('welcome');
});
