<?php 
namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class FbFollowerService{
    public static function getFbFollower(int $id = null) : Collection
    {
        if($id) {
            return DB::table('fb_follower')->where('id', $id)->get()->first();
        }
        return DB::table('fb_follower')->get(); 
    }
}

?>