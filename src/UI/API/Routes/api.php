<?php

use AdminKit\Benefits\UI\API\Controllers\BenefitController;
use Illuminate\Support\Facades\Route;

Route::get('/benefits', [BenefitController::class, 'index']);
Route::get('/benefits/{id}', [BenefitController::class, 'show']);
