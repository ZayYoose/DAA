<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'athlete_id',
        'blood_pressure',
        'heart_rate',
        'injury_history',
        'recovery_plan',
        'nutrition_plan',
        'checkup_date',
    ];

    // Relasi ke tabel Atlet
    public function athlete() {
        return $this->belongsTo(Athlete::class);
    }
}
