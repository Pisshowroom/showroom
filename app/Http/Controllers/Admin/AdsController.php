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
            ->paginate($request->per_page ?? 10);

        return $ads;
    }

    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required',
            'section' => 'required',
            'image' => 'required|file',
        ]);

        $category = new Ads();
        $category->page = $request->input('page');
        $category->section = $request->input('section');
        if ($request->hasFile('image')) {
            $category->image = uploadFoto($request->image, 'uploads/ads');
        }
        $category->save();

        return ResponseAPI('Iklan berhasil ditambahkan', 200);
    }

    public function show(Ads $category)
    {
        return $category;
    }

    public function update(Request $request, Ads $category)
    {
        // dd($request->all());
        if ($request->filled('page')) {
            $category->page = $request->input('page');
        }
        if ($request->filled('section')) {
            $category->section = $request->input('section');
        }

        if ($request->hasFile('image')) {
            $category->image = uploadFoto($request->image, 'uploads/ads');
        } else if ($request->filled('image')) {
            $category->image = $request->image;
        }

        $category->save();

        return ResponseAPI('Iklan berhasil diperbarui', 200);
    }

    public function destroy(Ads $category)
    {
        $category->delete();

        return ResponseAPI('Iklan berhasil dihapus', 200);
    }
}
