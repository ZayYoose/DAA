<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'date', 'category'];

    protected $casts = [
        'date' => 'date', // Supaya otomatis di-cast sebagai tanggal
    ];

    public function athletes()
    {
        return $this->belongsToMany(Athlete::class, 'athlete_competition');
    }
}
