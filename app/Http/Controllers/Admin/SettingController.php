<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // list settings
    public function index(Request $request)
    {
        $settings = \App\Models\Setting::whereNot('name', 'commerce_balance')->paginate($request->per_page ?? 15);

        return $settings;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
            'type' => 'required|in:number,richtext,textarea',
        ]);

        // check request->id
        $isCreate = false;
        if (!$request->id) {

            $setting = new Setting();
            $isCreate = true;
        } else {
            $setting = Setting::findOrFail($request->id);
            if ($setting->name == 'commerce_balance') {
                return ResponseAPI('Pengaturan ini tidak dapat diubah', 406);
            }
        }

        $setting->name = $request->input('name');
        $setting->value = $request->input('value');
        $setting->type = $request->input('type') ?? null;
        $setting->save();

        if ($isCreate)
            return ResponseAPI($setting, 200);
        else
            return ResponseAPI($setting, 200);
    }

    public function show(Setting $setting)
    {
        return ResponseAPI($setting, 200);
        return $setting;
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return ResponseAPI('Pengaturan berhasil dihapus', 200);
    }
}
