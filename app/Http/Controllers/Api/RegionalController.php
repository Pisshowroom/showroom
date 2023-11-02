<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RoCity;
use App\Models\RoProvince;
use App\Models\RoSubdistrict;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function provinces()
    {
        $provinces = RoProvince::all();

        return ResponseAPI($provinces);
    }

    public function citiesByProvince($provinceId)
    {
        $cities = RoCity::where('ro_province_id', $provinceId)->get();

        return ResponseAPI($cities);
    }

    public function subdistrictsByCity($cityId)
    {
        $subdistricts = RoSubdistrict::where('ro_city_id', $cityId)->get();

        return ResponseAPI($subdistricts);
    }
}
