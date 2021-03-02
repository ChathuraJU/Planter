<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use App\Person;
use App\User;
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

        return view('pages.registered_users', compact('users'));
    }

    public function userupdate(){
        echo true;
    } 

}
