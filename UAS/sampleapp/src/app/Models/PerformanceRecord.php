<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'athlete_id',
        'record_date',
        'swimming_style',
        'distance',
        'time_result',
        'heart_rate',
        'vo2_max',
        'coach_notes',
    ];

    public function athlete() {
        return $this->belongsTo(Athlete::class);
    }
}
