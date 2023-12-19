<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(Request $request)
    {
        // when request filled search on page
        $ads = Ads::when($request->filled('search'), function ($query, $request) {
            return $query->where('page', 'like', '%' . $request->search . '%');
        })
            ->orderByDesc('id')->paginate($request->per_page ?? 10);

        return $ads;
    }

    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required',
            'section' => 'required',
        ]);

        if (!$request->id)
            $ads = new Ads();
        else
            $ads = Ads::findOrFail($request->id);
        $ads->page = $request->input('page');
        $ads->section = $request->input('section');
        if ($request->hasFile('image')) {
            $ads->image = uploadFoto($request->image, 'uploads/ads');
        }
        $ads->save();

        return ResponseAPI($ads);
    }

    public function show(Ads $ads)
    {
        return $ads;
    }


    public function destroy(Ads $ads)
    {
        $ads->delete();

        return ResponseAPI('Iklan berhasil dihapus', 200);
    }
}
