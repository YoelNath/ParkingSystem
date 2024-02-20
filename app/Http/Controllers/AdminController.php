<?php

namespace App\Http\Controllers;

use App\Models\parkir;
use App\Exports\ParkingExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function generateReport(Request $request) {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|',
        ]);
    
        $parkingRecord = parkir::whereBetween('entry_time', [$request->start_date, $request->end_date])
            ->orWhereBetween('exit_time', [$request->start_date, $request->end_date])
            ->get();
    
            return view('admin.result', ['parkingRecord' => $parkingRecord]   );
    }
    
    public function exportReport()
    {
        return Excel::download(new ParkingExport(), 'parking_report_' . now()->format('YmdHis') . '.xlsx');
    }
}
