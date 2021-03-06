<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use App\Person;
use App\User;
use App\UserRole;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request){

        $users = DB::table('persons')
                    ->join('users', 'persons.person_id', '=', 'users.person_id')
                    ->where('users.status',0)->get();



        return view('pages.register_requests', compact('users'));
    }

    public function approveuser(Request $request)
    {
        $user = User::find($request->id);
        $user->status =1;

        if($user->save()){
            echo true;
        }else{
            echo false;
        };
    }

    public function rejectuser(Request $request)
    {
        $user = User::find($request->id);
        $user->status =2;

        if($user->save()){
            echo true;
        }else{
            echo false;
        };
    }

    public function getuser(Request $request)
    {
        $id = $request->id;

        $user = DB::table('users')
                        ->join('persons', 'users.person_id', '=', 'persons.person_id')
                        ->join('user_types', 'persons.user_type_id', '=', 'user_types.user_type_id')
                        ->where('users.id',$id)->get();

        echo $user->tojson();
    }

    public function getregistedusers(){

        $users = DB::table('users')
            ->join('persons', 'users.person_id', '=', 'persons.person_id')
            ->join('user_types', 'persons.user_type_id', '=', 'user_types.user_type_id')
            ->where('users.status',1)->get();

        $designations = UserRole::all();

//        dd($designations);

        return view('pages.registered_users', compact('users', 'designations'));
    }

    public function userupdate(Request $request){

//                 dd($request->all());

                $per_id = $request->txtid;

                $person = Person::find($per_id);
                $person->user_type_id = $request->designation;
                $person->fname = $request->fname;
                $person->lname = $request->lname;
                $person->gender = $request->gender;
                $person->dob = $request->dob;
                $person->nic = $request->nic;
                $person->contact = $request->contact;
                $person->address = $request->address;
                $person->epf = $request->epf;

                $user = User::where('person_id',$per_id)
                        ->update(['email' => $request->email,
                                'estate_name' => $request->estate]);

                if($person->save()){
                    echo true;
                }else{
                    echo false;
                }

    }

}


// "txtid" => "2"
//   "fname" => "banumathi"
//   "lname" => "sanda"
//   "gender" => "1"
//   "dob" => "2021-02-10"
//   "nic" => "56454545"
//   "address" => "vhggd"
//   "contact" => "546465465"



//   "email" => "jfksfh@lsdl.com"
//   "designation" => "Field Officer"
//   "estate" => "fdgfdg"


