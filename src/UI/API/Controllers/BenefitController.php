<?php

declare(strict_types=1);

namespace AdminKit\Benefits\UI\API\Controllers;

use AdminKit\Benefits\Models\Benefit;

class BenefitController extends Controller
{
    public function index()
    {
        return Benefit::all();
    }

    public function show(int $id)
    {
        return Benefit::findOrFail($id);
    }
}
