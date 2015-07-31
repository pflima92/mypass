<?php

namespace App\Http\Controllers\Auth;

use App\Password;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Redirect;


class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function remind()
    {
        return view('password.remind');
    }

    /**
     * @return mixed
     */
    public function request(Request $request)
    {
        $credentials = array('email' => $request->input('email'), 'password' => $request->input("password"));
        return Password::remind($credentials);
    }

    public function reset($token)
    {
        return view('password.reset')->with('token', $token);
    }

    public function update(Request $request)
    {
        $credentials = array('email' => $request->input('email'));

        return Password::reset($credentials, function($user, $password)
        {
            $user->password = Hash::make($password);

            $user->save();

            return Redirect::to('login')->with('flash', 'Your password has been reset');
        });
    }

}
