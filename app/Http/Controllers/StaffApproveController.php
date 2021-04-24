<?php

namespace App\Http\Controllers;

use App\Block;
use App\CollectionApproval;
use App\DivisionCollectionMain;
use App\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffApproveController extends Controller
{
    public function index($id)
    {
        $division_main = DivisionCollectionMain::find($id);
        $fields = Field::all();
        $blocks = Block::all();
        $approvals = CollectionApproval::where('division_collection_main_id', $id)->get();
        $division_main['weather'] = json_decode($division_main->weather);
        return view('pages.staff_approve', compact('division_main', 'fields', 'blocks', 'approvals'));
    }

    public function saveApprove(Request $request)
    {
        $collection_approval_existing = CollectionApproval::where('user_type_id', auth()->user()->user_type_id)->where('division_collection_main_id', $request->mainId)->get();
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
//            $path = Storage::putFile('public/approvals', $request->file('uploadedFile'),'public');
            $path = Storage::disk('public')->put('approvals', $request->file('uploadedFile'));
            $collection_approval->image = 'storage/'.$path;
        }
        if ($collection_approval->save()) {
            return true;
        } else {
            return 0;
        }
    }
}
