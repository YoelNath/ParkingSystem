<?php




namespace App\Exports;


use App\Models\parkir;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParkingExport implements FromCollection
{
    use Exportable;


    protected $start;
    protected $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
    public function collection()
    {
        if()
        $parkingRecords = parkir::where(function($query) {
            $query->whereDate('entry_time', '>=', $this->start)
                  ->whereDate('entry_time', '<=', $this->end);
        })
        ->orWhere(function($query) {
            $query->whereDate('exit_time', '>=', $this->start)
                  ->whereDate('exit_time', '<=', $this->end);
        })
        ->get();



        $exportData = $parkingRecords->map(function ($record) {
            return [
                'ID' => $record->id,
                'Code' => $record->code,
                'Police Number' => $record->police_number,
                'Entry Time' => $record->entry_time,
                'Exit Time' => $record->exit_time,
                'Parking Fee' => $record->parking_fee,


            ];
        });


        $headers = [
            'ID',
            'Code',
            'Police Number',
            'Entry Time',
            'Exit Time',
            'Parking Fee'

        ];

        return collect([$headers])->merge($exportData);
    }
}
