<?php

namespace App\Http\Controllers;

use App\Models\parkir;
use App\Exports\ParkingExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function generateReport(Request $request) {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
        $start = $request->start_date;
        $end = $request->end_date;
        Session::put('start_date', $start);
        Session::put('end_date', $end);
        $parkingRecord = parkir::where(function($query) use ($start, $end) {
            $query->whereDate('entry_time', '>=', $start)
                ->whereDate('entry_time', '<=', $end);
        })
        ->orWhere(function($query) use ($start, $end) {
            $query->whereDate('exit_time', '>=', $start)
                ->whereDate('exit_time', '<=', $end);
        })
        ->get();
            return view('admin.result', ['parkingRecord' => $parkingRecord]   );
    }
    
    public function exportReport()
    {
        $start = Session::get('start_date');
        $end = Session::get('end_date');
        return Excel::download(new ParkingExport($start, $end), 'parking_report_' . now()->format('YmdHis') . '.xlsx');
    }
}
