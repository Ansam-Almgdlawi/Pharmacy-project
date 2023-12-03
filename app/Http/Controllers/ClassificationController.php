<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Models\Drug;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index($classificationId): array
    {
        $classification = Classification::findOrFail($classificationId);

        // Retrieve the associated medicines
        $drugs[] = $classification->drugs;
        return $drugs;
    }

}
