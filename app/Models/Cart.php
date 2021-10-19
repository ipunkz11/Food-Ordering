<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['quantity`, `total_price`, `total'];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
