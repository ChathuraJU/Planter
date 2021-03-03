<?php

namespace App\Http\Controllers;

use App\Field;
use App\Person;
use App\Block;
use App\TempLabourCollectionSummaryEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        return view('pages.create_field', compact('fields'));
    }

    public function store(Request $request)
    {
//        echo $request->txt_upload_image;
        if ($request->txtId) {
            $field = Field::find($request->txtId);
        } else {
            $field = new Field();
        }
        $field->division_id = $request->txtDivision;
        $field->user_id = auth()->user()->id;
        $field->field_name = $request->txt_field_name;
        $field->hectare = $request->txt_no_of_hecatres;

       if ($request->txt_upload_image) {
//           if ($field->image != null && $field->image != '') {
//               File::delete(public_path().'/'.$field->image);
//               dd(public_path().'/'.$field->image);
//           }
           $path = Storage::putFile('public/fields', $request->file('txt_upload_image'),'public');
           $field->image = 'storage/'.$path;
       }

        if ($field->save()) {
            echo true;
        } else {
            echo false;
        }
    }

    public function retrieve(Request $request)
    {
        $field = Field::find($request->myData);
        echo $field->toJson();
    }

    public function addToTemp(Request $request)
    {
        $collection_summary = new TempLabourCollectionSummaryEntity();
        $collection_summary->labour_id = $request->labour;
        $collection_summary->epf_id = $request->epf;
        $collection_summary->field_no = $request->field;
        $collection_summary->block_no = $request->block_no;
        $collection_summary->no_of_liters = $request->latex_liters;
        $collection_summary->metrolac_reading = $request->metrolac;
        $collection_summary->latex = $request->latex_kg;
        $collection_summary->scrap = $request->scrap_kg;
        $collection_summary->over = $request->over_kg;
        $collection_summary->field_norm = $request->field_norms;
        $collection_summary->paid = $request->paid;
        $collection_summary->save();
        return true;
    }

    public function getFieldLabourData()
    {
        $data = TempLabourCollectionSummaryEntity::with('labour', 'field')->get();
        $summary = DB::select("SELECT tmp.block_no, f.field_name, SUM(tmp.no_of_liters) as latexL, COUNT(tmp.id) as tappers, SUM(tmp.latex) as latexKg, SUM(tmp.scrap) as scrap, (SUM(tmp.latex) + SUM(tmp.scrap)) as totalKg FROM tmp_labour_collection_summary tmp INNER JOIN `fields` f on f.field_id = tmp.field_no GROUP BY block_no");
        $response['data'] = $data;
        $response['summer'] = $summary;
        return json_encode($response);
    }

    public function deleteTmpLabourData(Request $request)
    {
        TempLabourCollectionSummaryEntity::find($request->id)->delete();
        return true;
    }

    public function addFieldDataLog(Request $request)
    {
        $persons = Person::where('user_type_id', 7)->get();
        $fields = Field::all();
        return view('pages.field_data', compact('persons', 'fields'));
    }

    public function saveFieldData(Request $request)
    {
        dd($request->all());
    }

    public function block_view(){

        $fields = Field::all();
        
        $blocks = DB::table('blocks')
                    ->join('fields', 'blocks.field_id', '=', 'fields.field_id')
                    ->join('divisions', 'fields.division_id', '=', 'divisions.division_id')->get();
 
        return view('pages.create_block', compact('fields','blocks'));
    }

    public function fieldblocksave(Request $request){

        $block = new Block();

        $field_id = $request->field;
        $hectare = $request->txt_no_of_hecatres;
        
        $block->block_no= $request->txt_block_no;
        $block->field_id=  $field_id;
        $block->hectare= $hectare;

        if($block->save()){

            $field = DB::update("update fields set hectare = hectare - '$hectare' where field_id = '$field_id'");
            
            echo true;
        }else{
            echo false;
        }

    }
}
