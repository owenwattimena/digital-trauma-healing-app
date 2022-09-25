<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Helpers\JsonFormatter;
use App\Services\TraumaService;
use App\Http\Controllers\Controller;

class TraumaController extends Controller
{
    public function traumaTestQuestion()
    {
        $trauma_test_question = TraumaService::getTrauma();
        return JsonFormatter::success($trauma_test_question, 'List of trauma test question');
    }
}
