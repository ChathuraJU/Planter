<?php

namespace App\Http\Controllers;

use App\CollectionApproval;
use App\DivisionCollection;
use App\DivisionCollectionMain;
use App\Field;
use App\Labour;
use App\LabourCollection;
use App\Person;
use App\Block;
use App\TempLabourCollectionSummaryEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use DateTime;
use Phpml\Regression\LeastSquares;
use Phpml\Regression\SVR;
use Phpml\SupportVectorMachine\Kernel;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        return view('pages.create_field', compact('fields'));
    }

    public function store(Request $request)
    {

        if ($request->txtId) {
            $field = Field::find($request->txtId);
        } else {
            $field = new Field();
        }
        $field->division_id = $request->txtDivision;
        $field->user_id = auth()->user()->id;
        $field->field_name = $request->txt_field_name;
        $field->hectare = $request->txt_no_of_hecatres;
        $field->remaining_hectare= $request->txt_no_of_hecatres;

       if ($request->txt_upload_image) {

           $path = Storage::disk('public')->put('fields', $request->file('txt_upload_image'));
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
        $collection_summary->payable = $request->payable;
        $collection_summary->paid = $request->paid;
        $collection_summary->save();
        return true;
    }

    public function getFieldLabourData()
    {
        $data = TempLabourCollectionSummaryEntity::with('labour', 'field', 'block')->get();
        $summary = DB::select("SELECT tmp.block_no, f.field_name, SUM(tmp.no_of_liters) as latexL, bl.block_no as blk, COUNT(tmp.id) as tappers, SUM(tmp.latex) as latexKg, SUM(tmp.scrap) as scrap, (SUM(tmp.latex) + SUM(tmp.scrap)) as totalKg FROM tmp_labour_collection_summary tmp INNER JOIN `fields` f on f.field_id = tmp.field_no INNER JOIN `blocks` bl on bl.id = tmp.block_no GROUP BY block_no");
        $response['data'] = $data;
        $response['summer'] = $summary;
        return json_encode($response);
    }

    public function deleteTmpLabourData(Request $request)
    {
        TempLabourCollectionSummaryEntity::find($request->id)->delete();
        return true;
    }

    public function getFieldLogSummary(Request $request)
    {
        $summary_data = DivisionCollection::with('block', 'field', 'division')->where('division_collection_main_id', $request->mainId)->get();
        return json_encode($summary_data);
    }

    public function addFieldDataLog(Request $request)
    {
        $persons = Person::where('user_type_id', 7)->get();
        $fields = Field::all();
        return view('pages.field_data', compact('persons', 'fields'));
    }

    public function saveFieldDataApproval(Request $request)
    {
        $collection_approval_existing = CollectionApproval::where('user_type_id', auth()->user()->user_type_id)->where('division_collection_main_id', $request->mainId)->get();
//        dd(auth()->user()->user_type_id, $collection_approval_existing);
        if (isset($collection_approval_existing[0])) {
            $response = array();
            $response['message'] = 'Already approved by current user type';
            return json_encode($response);
        }
        $collection_approval = new CollectionApproval();
        $collection_approval->user_type_id = auth()->user()->user_type_id;
        $collection_approval->user_id = auth()->user()->id;
        $collection_approval->note = $request->message;
        $collection_approval->approval_status = 1;
        $collection_approval->division_collection_main_id = $request->mainId;
        if ($request->uploadedFile) {
            $path = Storage::disk('public')->put('approvals', $request->file('uploadedFile'));
            $collection_approval->image = 'storage/'.$path;
        }
        if ($collection_approval->save()) {
            return true;
        } else {
            return 0;
        }
    }

    public function saveFieldData(Request $request)
    {
        $response = Http::get('http://api.openweathermap.org/data/2.5/weather?lat='.$request->lat.'&lon='.$request->lon.'&appid='.env('WEATHER_API_KEY'));

        $data = TempLabourCollectionSummaryEntity::with('labour', 'field')->get();
        $temp_sum_data = DB::select("SELECT (SUM(tmp.latex) + SUM(tmp.scrap)) as totalKg FROM tmp_labour_collection_summary tmp INNER JOIN `fields` f on f.field_id = tmp.field_no GROUP BY block_no");
        $total_tappers = TempLabourCollectionSummaryEntity::all()->count();
        $total_latexl = 0;
        $total_latekg = 0;
        $total_scrap = 0;
        $total_total = 0;
        $total_over = 0;
        $total_payable = 0;

        foreach ($temp_sum_data as $temp_sum_datum) {
            $total_total = $total_total + $temp_sum_datum->totalKg;
        }

        foreach ($data as $tempRow) {
            $total_latexl = $total_latexl + $tempRow->no_of_liters;
            $total_latekg = $total_latekg + $tempRow->latex;
            $total_scrap = $total_scrap + $tempRow->scrap;
            $total_over = $total_over + $tempRow->over;
            $total_payable = $total_payable + $tempRow->payable;
        }


        $division_collection_main = new DivisionCollectionMain();
        $division_collection_main->weather = $response->body();
        $division_collection_main->tot_tappers = $total_tappers;
        $division_collection_main->tot_latexl = $total_latexl;
        $division_collection_main->tot_latexkg = $total_latekg;
        $division_collection_main->tot_scrap = $total_scrap;
        $division_collection_main->tot_tot_kg = $total_total;
        $division_collection_main->tot_overkg = $total_over;
        $division_collection_main->tot_payable = $total_total;

        if ($division_collection_main->save()) {

            $summary = DB::select("SELECT tmp.block_no, f.field_id, SUM(tmp.no_of_liters) as latexL, COUNT(tmp.id) as tappers, SUM(tmp.latex) as latexKg, SUM(tmp.scrap) as scrap, (SUM(tmp.latex) + SUM(tmp.scrap)) as totalKg FROM tmp_labour_collection_summary tmp INNER JOIN `fields` f on f.field_id = tmp.field_no GROUP BY block_no");
            foreach ($summary as $tem_collection) {
                $division_collection = new DivisionCollection();
                $field = Field::find($tem_collection->field_id);
                $division_id = $field->division->division_id;
                $division_collection->division_id = $division_id;
                $division_collection->field_no = $tem_collection->field_id;
                $division_collection->block_no = $tem_collection->block_no;
                $division_collection->no_tappers = $tem_collection->tappers;
                $division_collection->latex_l = $tem_collection->latexL;
                $division_collection->latex_kg = $tem_collection->latexKg;
                $division_collection->scrap_kg = $tem_collection->scrap;
                $division_collection->total = $tem_collection->totalKg;
                $division_collection->division_collection_main_id = $division_collection_main->id;
                $division_collection->save();
            }

            $collection_approval = new CollectionApproval();
            $collection_approval->user_type_id = auth()->user()->user_type_id;
            $collection_approval->user_id = auth()->user()->id;
            $collection_approval->note = $request->txtMessage;
            $collection_approval->approval_status = 1;
            $collection_approval->division_collection_main_id = $division_collection_main->id;
            if ($request->uploadedFile) {
                $path = Storage::disk('public')->put('approvals', $request->file('uploadedFile'));
                $collection_approval->image = 'storage/'.$path;
            }
            if ($collection_approval->save()) {
                $tempData = TempLabourCollectionSummaryEntity::with('labour', 'field')->get();
                foreach ($tempData as $data) {

                    $labours = Labour::where('person_id',$data->labour_id)->first();

                    $labours->tot_latex_liters += $data->no_of_liters;
                    $labours->tot_latex_kg += $data->latex;
                    $labours->tot_scrap_kg += $data->scrap;
                    $labours->tot_over_kg += $data->over;
                    $labours->save();

                    $labour_collection = new LabourCollection();
                    $labour_collection->labour_id = $data->labour_id;
                    $labour_collection->division_collection_id = $division_collection->division_collection_id;
                    $labour_collection->field_id = $data->field_no;
                    $labour_collection->block_id = $data->block_no;
                    $labour_collection->labour_latex_kgs = $data->latex;
                    $labour_collection->labour_latex_liters = $data->no_of_liters;
                    $labour_collection->metrolac_reading = $data->metrolac_reading;
                    $labour_collection->labour_scrap_kgs = $data->scrap;
                    $labour_collection->labour_over_kgs = $data->over;
                    $labour_collection->labour_field_norms = $data->field_norm;
                    $labour_collection->labour_payable = $data->payable;
                    $labour_collection->labour_pay_status = $data->paid;
                    $labour_collection->save();
                }
                DB::table('tmp_labour_collection_summary')->truncate();
                return true;
            }
        }

    }

    public function getDataFromBlock(Request $request)
    {
        $preDta = DivisionCollection::with('block', 'field', 'division')->where('division_collection_main_id', $request->mainId)->where('block_no', $request->block_id)->get();
        return json_encode($preDta);
    }

    public function fieldReceivableSaveTemp(Request $request)
    {
        $collection = DivisionCollection::where('field_no', $request->field)->where('block_no', $request->block)->where('division_collection_main_id', $request->mainId)->get()->first();
        $collection->hect = $request->hect;
        $collection->no_tappers = $request->tappers;
        $collection->tap_per_hect = $request->tap_hect;
        $collection->field_wt = $request->field_wt;
        $collection->factory_wt = $request->factory_wt;
        $collection->loss = $request->lost;
        if ($collection->save()) {
            return true;
        } else {
            false;
        }
    }

    public function getFieldDataLogs()
    {

//        $data_list = DB::table('collection_approvals')->;
        $data_list = DB::table('collection_approvals')->groupBy('division_collection_main_id')->get([DB::raw('MAX(collection_approvals.id) as id')]);
        $pKeys = [];
        foreach ($data_list as $id) {
            array_push($pKeys, $id->id);
        }
        $data_list = CollectionApproval::wherein('id', $pKeys)->get();
        return view('pages.all_field_data_logs', compact('data_list'));
    }

    public function fieldReceivables($id)
    {
        $division_main = DivisionCollectionMain::find($id);
        $fields = Field::all();
        $blocks = Block::all();
        $approvals = CollectionApproval::where('division_collection_main_id', $id)->get();
        $division_main['weather'] = json_decode($division_main->weather);
        return view('pages.field_receivable', compact('division_main', 'fields', 'blocks', 'approvals'));
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
        $block->block_hectare= $hectare;

        if($block->save()){

            $field = DB::update("update fields set remaining_hectare = remaining_hectare - '$hectare' where field_id = '$field_id'");

            echo true;
        }else{
            echo false;
        }

    }
    public function getBlockData(Request $request){
        $id = $request->myData;

        $blocks = Block::where('field_id',$id)->get();

        return $blocks->tojson();

    }

    public function getPersonEPF(Request $request){
        $id = $request->myData;

        $blocks = Person::where('person_id',$id)->get();

        return $blocks->tojson();

    }

    public function dashboard($id = 'all'){
        $fields = Field::all();


        if($id !='all'){
//            $firstdate = DB::table('labour_collections')
//                    ->selectRaw('MIN(labour_collections.created_at) as min')
//                    ->get();
//
//            $firstdate = Carbon::parse($firstdate[0]->min)->format('Y-m-d');
            $todaydate = date('Y-m-d');

        //------Predicted KG
            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_kgs) as labour_latex_kgs"))->where('labour_collections.field_id', $id)->groupBy('created_at')->where('created_at', '<', date('Y-m-d'))->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_kgs);
            }

            if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $predictedKg = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $predictedKg = "No Data To Predict";
            }

        //------Predicted Ltrs

            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_liters) as labour_latex_liters"))->where('labour_collections.field_id', $id)->groupBy('created_at')->where('created_at', '<', date('Y-m-d'))->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_liters);
            }
           if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $predictedLtr = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $predictedLtr = "No Data To Predict";
            }

        //------Expected KG

            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_kgs) as labour_latex_kgs"))->where('labour_collections.field_id', $id)->groupBy('created_at')->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_kgs);
            }
           if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $expectedKg = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $expectedKg = "No Data To Predict";
            }

        //------Expected Ltrs

            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_liters) as labour_latex_liters"))->where('labour_collections.field_id', $id)->groupBy('created_at')->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_liters);
            }
           if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $expectedLtr = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $expectedLtr = "No Data To Predict";
            }


        //------Actual KG

            $actualKgSum = DB::table('labour_collections')
                            ->selectRaw('SUM(labour_collections.labour_latex_kgs) AS actualKg')
                            ->where('labour_collections.field_id', $id)
                            ->where('labour_collections.created_at', "=", $todaydate)
                            ->get();

            $actualKg = round(($actualKgSum[0]->actualKg),2);

        //------Actual Ltrs

            $actualLtrSum = DB::table('labour_collections')
                            ->selectRaw('SUM(labour_collections.labour_latex_liters) AS actualLtr')
                            ->where('labour_collections.field_id', $id)
                            ->where('labour_collections.created_at', "=", $todaydate)
                            ->get();

            $actualLtr = round(($actualLtrSum[0]->actualLtr),2);

        }
        else{

        //------Predicted KG

            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_kgs) as labour_latex_kgs"))->groupBy('created_at')->where('created_at', '<', date('Y-m-d'))->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_kgs);
            }
           if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $predictedKg = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $predictedKg = "No Data To Predict";
            }

        //------Predicted Ltrs

            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_liters) as labour_latex_liters"))->groupBy('created_at')->where('created_at', '<', date('Y-m-d'))->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_liters);
            }
            if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $predictedLtr = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $predictedLtr = "No Data To Predict";
            }


        //------Expected KG


            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_kgs) as labour_latex_kgs"))->groupBy('created_at')->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_kgs);
            }
            if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $expectedKg = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $expectedKg = "No Data To Predict";
            }

        //------Expected Ltrs

            $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_liters) as labour_latex_liters"))->groupBy('created_at')->orderBy('created_at', 'asc')->get();
            $samples = [];
            $targets = [];
            $defaultVal = 1;
            foreach ($labour_collections as $collec) {
                array_push($samples, array($defaultVal++));
                array_push($targets, $collec->labour_latex_liters);
            }
            if (count($samples) >= 2 && count($targets) >= 2) {
                $regression = new LeastSquares();
                $regression->train($samples, $targets);
                $expectedLtr = round($regression->predict([$defaultVal++]), 2);
            } else  {
                $expectedLtr = "No Data To Predict";
            }

        //------Actual KG

            $actualKgSum = DB::table('labour_collections')
                ->selectRaw('SUM(labour_collections.labour_latex_kgs) AS actualKg')
                ->whereRaw('DATE(labour_collections.created_at) = CURDATE()')
                ->get();

            $actualKg = round(($actualKgSum[0]->actualKg), 2);

        //------Actual Ltrs

            $actualLtrSum = DB::table('labour_collections')
                ->selectRaw('SUM(labour_collections.labour_latex_liters) AS actualLtr')
                ->whereRaw('DATE(labour_collections.created_at) = CURDATE()')
                ->get();

            $actualLtr = round(($actualLtrSum[0]->actualLtr), 2);

        }
        return view('pages.field_dashboard', compact('fields', 'predictedKg','expectedKg','actualKg','predictedLtr','expectedLtr','actualLtr'));
    }

    public function fieldData(Request $request){

        $date1 = $request->startdate;
        $date2 = $request->enddate;

        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        //------Actual Wk KG

        $actualWkKgSum = DB::table('labour_collections')
            ->selectRaw('SUM(labour_collections.labour_latex_kgs) AS actualWkKg')
            ->whereBetween('labour_collections.created_at', [$datetime1, $datetime2])
            ->get();

        $actualWkKg = round(($actualWkKgSum[0]->actualWkKg),2);

        //------Actual Wk Ltrs

        $actualWkLtrSum = DB::table('labour_collections')
            ->selectRaw('SUM(labour_collections.labour_latex_liters) AS actualWkLtr')
            ->whereBetween('labour_collections.created_at', [$datetime1, $datetime2])
            ->get();

        $actualWkLtr = round(($actualWkLtrSum[0]->actualWkLtr),2);


        //------Expected Wk KG

        $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_kgs) as labour_latex_kgs"))->where('created_at', '<', $datetime1)->groupBy('created_at')->orderBy('created_at', 'asc')->get();
        $samples = [];
        $targets = [];
        $defaultVal = 1;
        foreach ($labour_collections as $collec) {
            array_push($samples, array($defaultVal++));
            array_push($targets, $collec->labour_latex_kgs);
        }
        if (count($samples) >= 2 && count($targets) >= 2) {
            $regression = new LeastSquares();
            $regression->train($samples, $targets);
            $expectedWkKg = round($regression->predict([$defaultVal++]), 2);
        } else  {
            $expectedWkKg = "No Data To Predict";
        }

        //------Expected Wk Ltrs

        $labour_collections = LabourCollection::select(\DB::raw("SUM(labour_latex_liters) as labour_latex_liters"))->where('created_at', '<', $datetime1)->groupBy('created_at')->orderBy('created_at', 'asc')->get();
        $samples = [];
        $targets = [];
        $defaultVal = 1;
        foreach ($labour_collections as $collec) {
            array_push($samples, array($defaultVal++));
            array_push($targets, $collec->labour_latex_liters);
        }
        if (count($samples) >= 2 && count($targets) >= 2) {
            $regression = new LeastSquares();
            $regression->train($samples, $targets);
            $expectedWkLtr = round($regression->predict([$defaultVal++]), 2);
        } else  {
            $expectedWkLtr = "No Data To Predict";
        }

        $response = [$actualWkKg,$actualWkLtr,$expectedWkKg,$expectedWkLtr];
        return json_encode($response);
    }
}
