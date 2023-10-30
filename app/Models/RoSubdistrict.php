<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoSubdistrict extends Model
{
    use HasFactory;

    public function ro_city()
    {
        return $this->belongsTo(RoCity::class);
    }

    // create query Subdistict id = 18 load(city.province)
    // App\Models\RoSubdistrict::find(18)->load('city.province');
    
}
