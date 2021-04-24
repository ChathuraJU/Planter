<?php

namespace App\Http\Controllers;

use App\CollectionApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_lists = DB::table('collection_approvals')->groupBy('division_collection_main_id')->get([DB::raw('MAX(collection_approvals.id) as id')]);
        $pKeys = [];
        foreach ($data_lists as $id) {
            array_push($pKeys, $id->id);
        }
        $data_lists = CollectionApproval::wherein('id', $pKeys)->get();

        return view('pages.homepage', compact('data_lists'));
    }
}
