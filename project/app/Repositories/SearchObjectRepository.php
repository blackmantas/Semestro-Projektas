<?php


namespace App\Repositories;

use App\SearchObject;
use Illuminate\Support\Facades\DB;

class SearchObjectRepository
{
    public function getAll(){
        return SearchObject::all()->sortByDesc('Ad_upload_date');
    }



    public function getFilteredObjects($minPrice, $maxPrice, $minSize, $maxSize, $roomCount, $Installation, $Object_Type, $Heating){
        $queryBuilder = DB::table('search_objects');
        if(isset($minPrice))
        {
            $queryBuilder->where('Price', '>=', $minPrice);
        }
        if(isset($maxPrice))
        {
            $queryBuilder->where('Price', '<=', $maxPrice);
        }
        if(isset($minSize))
        {
            $queryBuilder->where('Size', '>=', $minSize);
        }
        if (isset($maxSize))
        {
            $queryBuilder->where('Size', '<=', $maxSize);
        }
        if (isset($roomCount))
        {
            $queryBuilder->where('Room_count', '=', $roomCount);
        }
        if (isset($Installation))
        {
            $queryBuilder->where('Installation', '=', $Installation);
        }
        if (isset($Object_Type))
        {
            $queryBuilder->where('Object_Type', '=', $Object_Type);
        }
        if (isset($Heating))
        {
            $queryBuilder->where('Heating', '=', $Heating);
        }

        return $queryBuilder->get()->sortByDesc('Ad_upload_date');
    }
}
