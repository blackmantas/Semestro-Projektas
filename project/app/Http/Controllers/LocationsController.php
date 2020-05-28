<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Location;

class LocationsController extends Controller
{
    public function home(){
        $locations = Location::all();
        //print_r(User::all());
        print_r(count($locations));
        return view('inc.locationsHome', ['locations' => $locations]);
    }
}
