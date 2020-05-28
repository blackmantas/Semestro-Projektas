<?php


namespace App\Repositories;

use App\SearchObject;
use Illuminate\Support\Facades\DB;

class SearchObjectRepository
{
    public function getAll(){
        $objects = SearchObject::all();
        return $objects;
    }

    public function getFilteredObjects($minPrice, $maxPrice, $minSize, $maxSize){
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

        return $queryBuilder->get();
    }
}
