<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'athlete_id',
        'training_date',
        'training_level',
        'training_type',
        'duration',
        'coach_notes',
    ];

    public function athlete() {
        return $this->belongsTo(Athlete::class);
    }
}
