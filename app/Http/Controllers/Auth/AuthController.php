<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:25',
            'lastname' => 'required|max:25',
            'gender' => 'required|max:10|min:4',
            'group' => 'required|max:10',
            'phone' => 'required|min:10|max:10',
            'email' => 'required|email|max:255|unique:students',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Student
     */
    protected function create(array $data)
    {
        return Student::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'gender' => $data['gender'],
            'group' => $data['group'],
            //'marks' => $data['marks'],
            //'birthday' => $data['birthday'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
