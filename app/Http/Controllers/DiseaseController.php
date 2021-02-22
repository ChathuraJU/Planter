<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use App\Disease;

use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function register_disease(){
        $diseases = Disease::all();
        return view('pages.create_disease', compact('diseases'));
    }

    public function save(Request $request){
        $disease = new Disease;

        $disease->disease_name = $request->disease_name;      
        $disease->keywords = $request->keywords;      
        $disease->descriptions = $request->description;     
        $disease->solution = $request->solutions;     
        // $disease->image = $request->image;  
        
        if($disease->save()){
            echo true;

        }else{
            echo false;
        }
    }

    public function retrieve(Request $request){
        $disease = Disease::find($request->id); 
        echo $disease->tojson();
    }
}
