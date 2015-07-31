<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('profile');
    }

    public function inactive(Request $request)
    {

        if (Auth::check())
        {
            $user = User::find(Auth::user()->id);

            $user->active = false;

            $user->save();

            Auth::logout();

            return view('inactive');
        }


    }
}
