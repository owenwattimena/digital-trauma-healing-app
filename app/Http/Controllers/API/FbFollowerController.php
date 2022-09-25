<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Helpers\JsonFormatter;
use App\Services\FbFollowerService;
use App\Http\Controllers\Controller;

class FbFollowerController extends Controller
{
    public function getFbFollower()
    {
        $fb_follower = FbFollowerService::getFbFollower();
        return JsonFormatter::success($fb_follower, 'List of Fb follower');
    }
}
