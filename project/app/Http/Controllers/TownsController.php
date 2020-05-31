<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Town;
use App\Repositories\TownReposity;


class TownsController extends Controller
{
    private $townRepository;

    public function __construct(TownReposity $townRepository)
    {
        $this->townRepository = $townRepository;
    }

    public function getMunicipality()
    {
        return $this->townRepository->getMunicipality();
    }
}
