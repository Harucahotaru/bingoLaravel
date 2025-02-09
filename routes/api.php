<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('/api/v1/test', [Controller::class, 'index']);
