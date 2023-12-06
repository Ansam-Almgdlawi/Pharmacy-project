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
        $drugs[] = $classification->drugs;
        return $drugs;
    }

}
