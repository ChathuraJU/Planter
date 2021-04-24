<?php


namespace App\Http\Controllers;


//use http\Env\Request;
use App\NewTask;
use App\Nursery;
use App\NurseryPlan;
use App\Task;
use App\Comment;

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
                $path = Storage::disk('public')->put('nurserys', $request->file('img_file'));
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

//            $path = Storage::putFile('nursery', $request->file('plot_image'),'public');
            $path = Storage::disk('public')->put('nursery', $request->file('plot_image'));
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

    public function dashboard(Request $request){

        if($request->has('search')){
            $nurseries = Nursery::where('plot_no', 'LIKE', "%{$request->search}%");

        }else{
            $nurseries = Nursery::orderby('nursery_id', 'asc');
        }

        $nurseries = $nurseries->paginate(8);
        $nurseryplans = NurseryPlan::all();
        $tasks = Task::all();
        $new_tasks = NewTask::all();
        $comments = Comment::all();

        $users = DB::table('users')
                    ->join('persons', 'users.person_id', '=', 'persons.person_id')
                    ->get();

        // $comments = DB::table('comments')
        //             ->join('users', 'comments.user_id', '=', 'users.id')
        //             ->join('persons', 'users.person_id', '=', 'persons.person_id')
        //             ->get();

//         dd($new_tasks);

        return view('pages.nursery_dashboard', compact('nurseries', 'nurseryplans', 'tasks', 'comments', 'users','new_tasks'));
    }

    public function comment(Request $request){

        // dd(auth()->user()->id);

        $comment = new comment();

        $comment->nursery_id = $request->id;
        $comment->user_id = auth()->user()->id;
        $comment->date_time = date("Y-m-d H:i:s");
        $comment->comment = $request->msg;

        if($comment->save()){
            return true;
        }else{
            return false;
        }
    }

    public function taskcomplete(Request $request){

        // dd($request->all());

        // $nurseryPlan = NurseryPlan::where('nursery_id', $request->id)->first();
        $nursery_plan = NurseryPlan::where('id', $request->id)->first();

        // dd($nursery_plan);

        $nursery_plan->note = $request->msg;
        $nursery_plan->status = 1;
        $nursery_plan->completed_date = $request->date;

        if($nursery_plan->save()){
            return true;
        }else{
            return false;
        }

    }

    public function gettask(Request $request){

        $nursery_plan = NurseryPlan::where('id', $request->id)->get();

        return $nursery_plan->tojson();

    }

    public function taskcompletenew(Request $request){

        // dd($request->all());

        // $nurseryPlan = NurseryPlan::where('nursery_id', $request->id)->first();
        $new_task = NewTask::where('id', $request->id)->first();

        // dd($nursery_plan);

        $new_task->note = $request->msg;
        $new_task->status = 1;
        $new_task->completed_date = $request->date;

        if($new_task->save()){
            return true;
        }else{
            return false;
        }

    }

    public function gettasknew(Request $request){

        $new_task = NewTask::where('id', $request->id)->get();

        return $new_task->tojson();

    }

    public function tasknew(Request $request){
//dd($request->all());
        $new_task = new NewTask();

        $new_task->nursery_id = $request->id;
        $new_task->task_name = $request->task;
        $new_task->scheduled_date = $request->taskdate;
        $new_task->status = $request->newtaskstatus;
        $new_task->note = $request->newtasknote;
        $new_task->user_id = auth()->user()->id;

        if($new_task->save()){
            return true;
        }else{
            return false;
        }
    }
}
