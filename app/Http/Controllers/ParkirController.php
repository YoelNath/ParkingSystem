<?php

namespace App\Http\Controllers;


use App\Models\parkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ParkirController extends Controller
{
   public function park(Request $request)
   {
      $request->validate([
         "police_num" => "required|string",
      ]);
      $parkres = parkir::wherenull('exit_time')
         ->where('police_number', $request->police_num)
         ->get();

      if ($parkres->isEmpty()) {
         $uniqcode = uniqid();
         parkir::create([
            'code' => $uniqcode,
            'police_number' => $request->police_num,
            'entry_time' => now()
         ]);

         return Redirect::back()->with('uniqcode', $uniqcode);



      } else {

         return Redirect::back()->withErrors(['error' => 'Car is already parked.']);
      }
   }
   public function exit(Request $request)
   {
      $request->validate([
         'unique_code' => 'required|string',
      ]);

      $parkingRecord = parkir::where('code', $request->unique_code)
         ->whereNull('exit_time')
         ->first();

      if ($parkingRecord) {
         $entryTime = $parkingRecord->entry_time;
         $exitTime = now();
         $hoursParked = $entryTime->diffInHours($exitTime);
         $parkingFee = 3000;
         $parkingFee += ($hoursParked) * 3000;

         $parkingRecord->update([
            'exit_time' => $exitTime,
            'parking_fee' => $parkingFee,
         ]);

         return Redirect::route('exit-success')->with('parkingRecord', $parkingRecord);
      } else {
         return Redirect::route('exit')->withErrors(['error' => 'Invalid unique code.']);
      }
   }
}
