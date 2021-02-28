<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Person;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
//            'fname' => ['bail','required', 'string', 'max:255'],
//            'lname' => ['bail','required', 'string', 'max:255'],
//            'gender' => ['bail','required', 'string', 'max:255'],
//            'dob' => ['bail','required'],
//            'nic' => ['bail','required', 'string', 'max:255'],
//            'contact' => ['bail','required', 'numeric', 'max:12'],
//            'address' => ['bail', 'required', 'string', 'max:12'],
//            'designation' => ['bail','required', 'string', 'max:12'],
//            'estate' => ['bail','required', 'string', 'max:12'],
//            'email' => ['bail','required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['bail','required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $person = new Person;

        $person->user_type_id = $data['designation'];
        $person->fname = $data['fname'];
        $person->lname = $data['lname'];
        $person->gender = $data['gender'];
        $person->dob = $data['dob'];
        $person->nic = $data['nic'];
        $person->contact = $data['contact'];
        $person->address = $data['address'];
//        $person->designation = $data['designation'];
//        $person->estate = $data['estate'];

        $person->Save();
        $data['person_id'] = $person->person_id;


        return User::create([
            'username' => $data['email'],
            'person_id' => $data['person_id'],
            'status' => 0,
            'estate_name' => $data['estate'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
