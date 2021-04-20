<?php

namespace App\Http\Controllers;

use App\LabourCollection;
use DateTime;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generate(Request $request)
    {
        $date = new DateTime($request->month);
        $endData = new DateTime($request->month);
        $endData->modify('+30 day');

        $startDate = $date->format('Y-m-d');
        $endDate = $endData->format('Y-m-d');

        $data = LabourCollection::selectRaw('field_id, SUM(labour_latex_liters) AS liters, SUM(labour_latex_kgs) AS latex, SUM(labour_scrap_kgs) AS scrap, SUM(labour_over_kgs) AS sumover, SUM(labour_payable) AS salaries')
            ->where('created_at', '>=', $startDate)
            ->where('created_at', '<=', $endDate)
            ->groupBy('field_id')->get();

        return view('report-view', compact('data', 'startDate'));

    }
}
