<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccidenteController;

Route::resource('accidentes', AccidenteController::class);
