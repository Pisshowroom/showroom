<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $fillable = ['main'];
    protected $casts = [
        'main' => 'boolean',
        'for_seller' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ro_province()
    {
        return $this->belongsTo(RoProvince::class, 'ro_province_id', 'id');
    }

    public function ro_city()
    {
        return $this->belongsTo(RoCity::class, 'ro_city_id', 'id');
    }

    public function ro_subdistrict()
    {
        return $this->belongsTo(RoSubdistrict::class, 'ro_subdistrict_id', 'id');
    }
}
