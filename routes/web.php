<?php

use App\Http\Controllers\UploadController;
use App\Models\Pengajuan;
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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/About', function () {
    return view('index');
});

Route::get('/vardump', function()
{
    echo '<pre>';
    var_dump(Pengajuan::all());
    echo '</pre>';
    //exit;  <--if you want
});

Route::get('/data',[UploadController::class, 'display_data']);

Route::get('/upload', [UploadController::class, 'upload']);

Route::post('/upload/proses', [UploadController::class, 'proses_upload']);