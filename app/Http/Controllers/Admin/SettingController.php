<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // list settings
    public function index(Request $request)
    {
        $settings = \App\Models\Setting::paginate($request->per_page ?? 15);

        return $settings;
    }
}
