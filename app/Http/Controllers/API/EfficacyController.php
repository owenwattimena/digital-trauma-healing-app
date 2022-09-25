<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Helpers\JsonFormatter;
use App\Services\EfficacyService;
use App\Http\Controllers\Controller;

class EfficacyController extends Controller
{
    public function efficacyTestQuestion()
    {
        $efficacy_test_question = EfficacyService::getEfficacy();
        return JsonFormatter::success($efficacy_test_question, 'List of efficacy test question');
    }
}
