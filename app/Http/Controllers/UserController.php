<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
       /**
     * Display a listing of the resource.
     * new change just for comment
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** change this declaration to the name of the class user model */
        $users = User_model::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
            
    }

}
