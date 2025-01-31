<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi massal
    protected $fillable = ['name'];

    // Relasi jika ada
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
