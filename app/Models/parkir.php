<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parkir extends Model
{
    use HasFactory;
    protected $fillable = ['parking_fee','code','police_number','entry_time','exit_time'];    
    protected $casts = [
        'entry_time' => 'datetime',
    ];
}
