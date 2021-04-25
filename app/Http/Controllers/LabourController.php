<?php


namespace App\Http\Controllers;

use App\Person;
use App\Labour;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class LabourController extends Controller
{
    public function index(Request $request){

//        $labours = DB::select("SELECTpersons.person_id,persons.user_type_id,persons.fname,persons.lname,labour_collections.field_id,persons.gender,persons.dob,persons.nic,persons.contact,persons.address,persons.epf,persons.image,persons.`status`,persons.created_at,persons.updated_at,Sum(labour_collections.labour_latex_liters),Sum(labour_collections.labour_scrap_kgs),Sum(labour_collections.labour_over_kgs),Sum(labour_collections.labour_latex_kgs),Sum(labour_collections.labour_payable),labour_collections.labour_id,labour_collections.labour_collection_id FROM `persons` INNER JOIN `labours` ON `persons`.`person_id` = `labours`.`person_id` INNER JOIN `labour_collections` ON `labours`.`labour_id` = `labour_collections`.`labour_id` GROUP BY labour_collections.labour_id")
//                    ->join('labours', 'persons.person_id', '=', 'labours.person_id')
//                    ->join('labour_collections', 'labours.labour_id', '=', 'labour_collections.labour_id')->tosql();

        $labours = Person::select(\DB::raw('*'))
                    ->join('labours', 'persons.person_id', '=', 'labours.person_id');

//        $labours = Person::select(\DB::raw('persons.person_id, persons.user_type_id, persons.fname, persons.lname, labour_collections.field_id, persons.gender, persons.dob, persons.nic, persons.contact, persons.address, persons.epf, persons.image, persons.`status`, persons.created_at, persons.updated_at, Sum(labour_collections.labour_latex_liters) AS labour_latex_liters, Sum(labour_collections.labour_scrap_kgs) AS labour_scrap_kgs, Sum(labour_collections.labour_over_kgs) AS labour_over_kgs, Sum(labour_collections.labour_latex_kgs) AS labour_latex_kgs, Sum(labour_collections.labour_payable) AS labour_payable, labour_collections.labour_id, labour_collections.labour_collection_id'))
//            ->join('labours', 'persons.person_id', '=', 'labours.person_id')
//            ->join('labour_collections', 'labours.labour_id', '=', 'labour_collections.labour_id')
//            ->groupBy('labour_collections.labour_id');


        if($request->has('search')){
            $labours->where('fname', 'LIKE', "%{$request->search}%")
                    ->orWhere('lname', 'LIKE', "%{$request->search}%");
        }
//        dd($labours);

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

//                dd($request->all());

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

                $path = Storage::disk('public')->put('persons/labours', $request->file('labour_img'));
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
