<?php 

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TraumaService{
    
    public static function getTrauma(int $id = null) : Collection
    {
        if($id) {
            return DB::table('trauma_test_question')->where('id', $id)->get()->first();
        }
        return DB::table('trauma_test_question')->get(); 
    }
}

?>