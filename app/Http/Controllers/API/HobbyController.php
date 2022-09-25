<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Helpers\JsonFormatter;
use App\Services\HobbyService;
use App\Http\Controllers\Controller;

class HobbyController extends Controller
{
    public function getHobby()
    {
        $hobby = HobbyService::getHobby();
        return JsonFormatter::success($hobby, 'List of hobby');
    }
}
