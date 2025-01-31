<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi massal
    protected $fillable = ['user_id', 'total_price', 'status'];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model Product (atau model lainnya)
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
