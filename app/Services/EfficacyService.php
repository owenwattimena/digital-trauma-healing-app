<?php 
namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class EfficacyService
{
    public static function getEfficacy(int $id = null) : Collection
    {
        if($id) {
            return DB::table('efficacy_test_question')->where('id', $id)->get()->first();
        }
        return DB::table('efficacy_test_question')->get(); 
    }
}

?>