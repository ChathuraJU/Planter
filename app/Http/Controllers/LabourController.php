<?php


namespace App\Http\Controllers;

use App\Person;
use App\Labour;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LabourController extends Controller
{
    public function index(Request $request){

        $labours = DB::table('persons')
                    ->join('labours', 'persons.person_id', '=', 'labours.person_id');

        if($request->has('search')){
            $labours->where('fname', 'LIKE', "%{$request->search}%")
                    ->orWhere('lname', 'LIKE', "%{$request->search}%");
        }

        $labours =  $labours->paginate(8);
        
        return view('pages.labour_chart', compact('labours'));
    }

    public function labour_register(){
        return view('pages.register_labour');
    }

    public function store(Request $request){

            DB::beginTransaction();

            $per_id = $request->txtId;

            if ($per_id) {
                $person = Person::find($per_id);

                $person->fname = $request->fname;
                $person->lname = $request->lname;
                $person->gender = $request->gender;
                $person->dob = $request->dob;
                $person->nic = $request->nic;
                $person->contact = $request->contact;
                $person->address = $request->address;
                $person->epf = $request->epf;

                $person->save();

            } else {

                $person = new Person();

                $person->user_type_id = 7;
                $person->fname = $request->fname;
                $person->lname = $request->lname;
                $person->gender = $request->gender;
                $person->dob = $request->dob;
                $person->nic = $request->nic;
                $person->contact = $request->contact;
                $person->address = $request->address;
                $person->epf = $request->epf;

                $path = Storage::putFile('persons/labours', $request->file('labour_img'),'public');
                $person->image = 'storage/'.$path;

                $person->status = 1;


                if ($person->save()) {

                    $labour_details = new Labour();

                    $labour_details->person_id = $person->person_id;

                    if($labour_details->save()){
                        DB::commit();
                        echo true;
                    }

                } else {
                    DB::rollBack();
                    echo false;
                }

            }





    }

}
