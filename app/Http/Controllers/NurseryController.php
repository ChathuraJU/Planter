<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use App\Nursery;
use App\NurseryPlan;
use App\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class NurseryController extends Controller
{
    public function index(){ 

        $nurseries = Nursery::all();

        return view('pages.nursery_create', compact('nurseries'));
    }

    public function store(Request $request){
    //    dd($request->all());

        $nur_id = $request->txtid;

        if($nur_id){

            $nursery = Nursery::find($nur_id);

            $nursery->region = $request->plot_region;
            $nursery->plot_no = $request->plot_no;
            $nursery->no_of_cuttings = $request->plot_cuttings;
            $nursery->layout_date = $request->plot_date;
            // $nursery->image = $request->plot_image;


            // dd($request->img_file);


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
                $path = Storage::putFile('nurserys', $request->file('img_file'),'public');
                $nursery->image = 'storage/'.$path;
            }

           

            if($nursery->save()){
                echo true;

            }else{
                echo false;
            }

        }else{
            $nursery = new Nursery();

            $nursery->region = $request->plot_region;
            $nursery->plot_no = $request->plot_no;
            $nursery->no_of_cuttings = $request->plot_cuttings;
            $nursery->layout_date = $request->plot_date;
            // $nursery->image = $request->plot_image;

            $path = Storage::putFile('nursery', $request->file('plot_image'),'public');
            $nursery->image = 'storage/'.$path;

            $nursery->save();

            $nursery_plan = new NurseryPlan();

            $date = new \DateTime($request->plot_date);
            $interval1 = new \DateInterval('P14D');
            $interval2 = new \DateInterval('P60D');
            $interval3 = new \DateInterval('P270D');

            $tasktype0count = Task::where('task_type', 1)->count();
            $tasktype1count = Task::where('task_type', 2)->count();
            $tasktype2count = Task::where('task_type', 3)->count();
            $tasktype3count = Task::where('task_type', 4)->count();

            $allcount = Task::all()->count();

            for ($x = 1; $x <= $allcount; $x++) {

                if($x <= $tasktype0count){
                    $date = new \DateTime($request->plot_date);

                }elseif($x <= $tasktype0count+$tasktype1count){
                    $date->add($interval1);
            
                }elseif($x <= ($tasktype0count+$tasktype1count+$tasktype2count)){
                    if($x == ($tasktype0count+$tasktype1count+1)){
                        $date = new \DateTime($request->plot_date);
                    }
                    $date->add($interval2);
            
                }elseif($x <=($tasktype0count+$tasktype1count+$tasktype2count+$tasktype3count)){
                    if($x == ($tasktype0count+$tasktype1count+$tasktype2count+1)){
                        $date = new \DateTime($request->plot_date);
                    }
                    $date->add($interval3);        
                }

                $data[] = array(
                'nursery_id' => $nursery->nursery_id,
                'task_id' => $x,
                'scheduled_date' => $date->format("Y-m-d"),  
                'status' => 0,
                'user_id' => auth()->user()->id,
                );
                $date = new \DateTime($date->format("Y-m-d"));
              } 
              $status = DB::table('nursery_plan') -> insert($data);

            if($status){
                echo true;

            }else{
                echo false;
            }
        }
    }

    public function retrieve(Request $request){
        $nursery = Nursery::find($request->id);     

        $nursery_plan = DB::table('nursery_plan')
                    ->join('tasks', 'nursery_plan.task_id', '=', 'tasks.task_id')
                    ->where('nursery_id', $request->id)
                    ->orderBy('scheduled_date')->get();

        $data[]=array(
            'nursery'=>$nursery,
            'nursery_plan'=>$nursery_plan,
        );
        echo json_encode($data);
    }

    public function delete(Request $request){
        $nursery = Nursery::find($request->id);
        $nursery->delete();

        $nursery_plan = NurseryPlan::where('nursery_id', $request->id);
        $nursery_plan->delete();
    }

    public function get_diseases(Request $request){
        // $diseases = Disease::orderBy('id');

        // if($request->has('search')){
        //     $diseases->where('keywords', 'LIKE', "%{$request->search}%");
        // }
        // $diseases = $diseases->paginate(5);

        // return view('pages.search_disease', compact('diseases'));
    }

    // public function update_nursery(Request $request){

    //     $nur_id = $request->txtid;

    //     $nursery = Nursery::find($nur_id);

    //     $nursery->Region_em = $request->plot_region;
    //     // $nursery->plot_no = $request->plot_no;
    //     $nursery->cuttings_em = $request->plot_cuttings;
    //     $nursery->layout_date_em = $request->plot_date;

    //     if($nursery->save()){
    //         echo true;

    //     }else{
    //         echo false;
    //     }
    // }

    public function dashboard(){

        $nurseries = Nursery::all();
        $nerseryplans = NurseryPlan::all();

        // $nurseries = DB::table('nurseries')
        //             ->join('nursery_plan', 'nurseries.nursery_id', '=', 'nursery_plan.nursery_id')
        //             ->orderBy('scheduled_date')->get();

                    dd($nurseries);
                    
        return view('pages.nursery_dashboard', compact('nurseries', 'nerseryplans'));
    }
    
}
