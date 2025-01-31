<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model {
    use HasFactory;

    protected $fillable = ['name', 'age', 'height', 'weight', 'training_level'];

    public function trainings() {
        return $this->hasMany(Training::class);
    }

    public function performanceRecords() {
        return $this->hasMany(PerformanceRecord::class);
    }

    public function healthRecords() {
        return $this->hasMany(HealthRecord::class);
    }

    public function competitions() {
        return $this->hasMany(Competition::class);
    }
}
