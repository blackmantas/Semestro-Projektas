<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function GetUser(){
        $users = User::all();
        return view('inc.home', ['users' => $users]);
    }

    public function add($request){
        $this->validate($request, [
           'title'=>'required',
           'description '=>'required',
        ]);
        return view('inc.home');
    }
}
