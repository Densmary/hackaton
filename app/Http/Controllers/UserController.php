<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserController extends Controller {
    //
       /**
     * Display a listing of the resource.
     * new change just for comment
     * second change for testing
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** change this declaration to the name of the class user model */
        $users = AuthUser::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());

    }

}
