<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        // when request filled search on name
        $sliders = Slider::paginate($request->per_page ?? 10);

        return $sliders;
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'image' => 'required|file',
        ]);
        
        $slider = new Slider();
        $slider->description = $request->input('description');
        if ($request->hasFile('image')) {
            $slider->image = uploadFoto($request->image, 'uploads/sliders');
        }
        $slider->save();

        return ResponseAPI('Sliders berhasil ditambahkan', 200);
    }

    public function show(Slider $slider)
    {
        return $slider;
    }

    public function update(Request $request, Slider $slider)
    {
        // dd($request->all());
        if ($request->filled('description')) {
            $slider->description = $request->input('description');
        }

        if ($request->hasFile('image')) {
            $slider->image = uploadFoto($request->image, 'uploads/sliders');
        } else if ($request->filled('image')) {
            $slider->image = $request->image;
        }

        $slider->save();

        return ResponseAPI('Sliders berhasil diperbarui', 200);
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return ResponseAPI('Sliders berhasil dihapus', 200);
    }
}
