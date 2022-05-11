<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('index');
});

Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/process', [UploadController::class, 'uploadProcess']);
// Route::get('/update', [UploadController::class, 'update']);


