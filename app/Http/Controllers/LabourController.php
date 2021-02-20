<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use App\Person;
use App\Labour;

use Illuminate\Http\Request;

class LabourController extends Controller
{
    public function index(){
        return view('pages.labour_chart');
    }

    public function labour_register(){
        return view('pages.register_labour');
    }

    public function store(Request $request){
        $per_id = $request->txtId;
        if ($per_id) {
            $field = Person::find($per_id);
        } else {
            $person = new Person();
        }
        $person->user_type_id = 7;
        $person->fname = $request->fname;
        $person->lname = $request->lname;
        $person->gender = $request->gender;
        $person->dob = $request->dob;
        $person->nic = $request->nic;
        $person->contact = $request->contact;
        $person->address = $request->address;
        $person->epf = $request->epf;
//        $person->image = $request->txt_no_of_hecatres;
        $person->status = 1;

        if ($person->save()) {
            echo true;
        } else {
            echo false;
        }
    }

}
