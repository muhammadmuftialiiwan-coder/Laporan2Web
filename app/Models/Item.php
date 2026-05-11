<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Kolom-kolom ini harus diizinkan untuk diisi massal
    protected $fillable = ['category_id', 'name', 'stock', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}