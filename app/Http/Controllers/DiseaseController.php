<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use App\Disease;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DiseaseController extends Controller
{
    public function register_disease(){
        $diseases = Disease::all();
        return view('pages.create_disease', compact('diseases'));
    }

    public function save(Request $request){
    //    dd($request->all());
        $dis_id = $request->txtId;

        if($dis_id){

            $disease = Disease::find($dis_id);

            $disease->disease_name = $request->disease_name_up;
            $disease->keywords = $request->keywords_up;
            $disease->descriptions = $request->description_up;
            $disease->solution = $request->solutions_up;


            dd($request->img_file);


            if ($request->img_file) {


                $image = $request->file('img_file');
                foreach ($image as $files) {
                    $destinationPath = 'public/files/';
                    $file_name = time() . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $file_name);
                    $data[] = $file_name;
                }


//           if ($field->image != null && $field->image != '') {
//               File::delete(public_path().'/'.$field->image);
//               dd(public_path().'/'.$field->image);
//           }
                $path = Storage::putFile('diseases', $request->file('img_file'),'public');
                $disease->image = 'storage/'.$path;
            }

            if($disease->save()){
                echo true;

            }else{
                echo false;
            }

        }else{
            $disease = new Disease;

            $disease->disease_name = $request->disease_name;
            $disease->keywords = $request->keywords;
            $disease->descriptions = $request->description;
            $disease->solution = $request->solutions;

            $path = Storage::putFile('diseases', $request->file('img_file'),'public');
            $disease->image = 'storage/'.$path;

            if($disease->save()){
                echo true;

            }else{
                echo false;
            }
        }

    }

    public function retrieve(Request $request){
        $disease = Disease::find($request->id);
        echo $disease->tojson();
    }

    public function delete(Request $request){
        $disease = Disease::find($request->id);
        $disease->delete();
    }

    public function get_diseases(Request $request){
        $diseases = Disease::orderBy('id');

        if($request->has('search')){
            $diseases->where('keywords', 'LIKE', "%{$request->search}%");
        }
        $diseases = $diseases->paginate(5);

        return view('pages.search_disease', compact('diseases'));
    }
}
