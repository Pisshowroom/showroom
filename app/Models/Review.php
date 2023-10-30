<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;
    
    // belongsTo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // belongsTo Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
