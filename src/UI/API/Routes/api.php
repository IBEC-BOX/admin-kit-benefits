<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Benefits\UI\API\Controllers\BenefitController;

Route::get('/benefits', [BenefitController::class, 'index']);
Route::get('/benefits/{id}', [BenefitController::class, 'show']);
