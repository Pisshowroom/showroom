<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoCity extends Model
{
    use HasFactory, SoftDeletes;

    public function ro_province()
    {
        return $this->belongsTo(RoProvince::class);
    }

    public function ro_subdistricts()
    {
        return $this->hasMany(RoSubdistrict::class);
    }
}
