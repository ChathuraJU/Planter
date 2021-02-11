<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        return view('pages.create_field', compact('fields'));
    }

    public function store(Request $request)
    {
        echo $request->txt_upload_image;
//        if ($request->txtId) {
//            $field = Field::find($request->txtId);
//        } else {
//            $field = new Field();
//        }
//        $field->division_id = $request->txtDivision;
//        $field->user_id = auth()->user()->id;
//        $field->field_name = $request->txt_field_name;
//        $field->hectare = $request->txt_no_of_hecatres;
//
//        if ($field->save()) {
//            echo true;
//        } else {
//            echo false;
//        }
    }

    public function retrieve(Request $request)
    {
        $field = Field::find($request->myData);
        echo $field->toJson();
    }
}
