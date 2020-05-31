<?php

namespace App\Http\Controllers;

use App\Requests\FilteredSearchObjectRequest;
use App\SearchObject;
use App\Repositories\SearchObjectRepository;
use Illuminate\Http\Request;

class SearchObjectsController extends Controller
{
    private $searchObjectRepository;

    public function __construct(SearchObjectRepository $searchObjectRepository)
    {
        $this->searchObjectRepository = $searchObjectRepository;
    }

    public function filteredSearch(Request $request)
    {
        $filtered = $this->searchObjectRepository->getFilteredObjects(
            $request->get('minPrice'),
            $request->get('maxPrice'),
            $request->get('minSize'),
            $request->get('maxSize'),
            $request->get('Room_count'),
            $request->get('Installation'),
            $request->get('Object_Type'),
            $request->get('Heating')
        );

        return redirect()->route('sem.pro.filtered')->with(['filteredObjects' => $filtered]);
    }

    public function AllObjects()
    {
        $all = $this->searchObjectRepository->getAll();
        return view('SemPro/home', ['all' => $all]);
    }
}
