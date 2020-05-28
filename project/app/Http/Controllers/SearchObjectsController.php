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

    public function getAll()
    {
        return SearchObject::all();
    }

    public function filteredSearch(Request $request)
    {
        $filtered = $this->searchObjectRepository->getFilteredObjects(
            $request->get('minPrice'),
            $request->get('maxPrice'),
            $request->get('minSize'),
            $request->get('maxSize')
        );

        return redirect()->route('sem.pro.filtered')->with(['filteredObjects' => $filtered]);
    }
}
