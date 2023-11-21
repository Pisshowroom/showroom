<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {
        // when request filled search on name
        $categories = SubCategory::when($request->filled('search'), function ($query, $request) {
            return $query->where('name', 'like', '%' . $request->search . '%');
        })
            ->paginate($request->per_page ?? 10);

        return $categories;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|integer',
            'image' => 'nullable|file',
        ]);

        $subCategory = new SubCategory();
        $subCategory->name = $request->input('name');
        $subCategory->category_id = $request->input('category_id');
        if ($request->hasFile('image')) {
            $subCategory->image = uploadFoto($request->image, 'uploads/categories');
        }
        $subCategory->save();

        return ResponseAPI('Sub Kategori berhasil ditambahkan', 200);
    }

    public function show(SubCategory $subCategory)
    {
        return $subCategory;
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        // dd($request->all());
        if ($request->filled('name')) {
            $subCategory->name = $request->input('name');
        }

        if ($request->filled('category_id')) {
            $subCategory->category_id = $request->input('category_id');
        }

        if ($request->hasFile('image')) {
            $subCategory->image = uploadFoto($request->image, 'uploads/categories');
        } else if ($request->filled('image')) {
            $subCategory->image = $request->image;
        }

        $subCategory->save();

        return ResponseAPI('Sub Kategori berhasil diperbarui', 200);
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();

        return ResponseAPI('Sub Kategori berhasil dihapus', 200);
    }
}
