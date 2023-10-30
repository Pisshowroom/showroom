<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoProvince extends Model
{
    use HasFactory, SoftDeletes;

    public function ro_cities()
    {
        return $this->hasMany(RoCity::class);
    }
}
