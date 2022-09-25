<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class HobbyService
{
    /**
     * Get list of hobby
     * @return Collection
     */
    public static function getHobby(int $id = null) : Collection
    {
        if($id) {
            return DB::table('hobby')->where('id', $id)->get()->first();
        }
        return DB::table('hobby')->get(); 
    }
}