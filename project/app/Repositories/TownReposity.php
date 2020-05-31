<?php


namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Town;

class TownReposity
{
    public function getMunicipality()
    {
        return Town::all('Municipality')->unique();
    }
}
