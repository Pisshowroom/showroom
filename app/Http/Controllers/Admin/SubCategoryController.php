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
        $categories = SubCategory::with(['category'])->when($request->filled('search'), function ($query, $request) {
            return $query->where('name', 'like', '%' . $request->search . '%');
        })
            ->paginate($request->per_page ?? 10);

        return $categories;
    }

    /* 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $isCreate = false;
        if (!$request->id) {
            $request->validate([
                'image' => 'required',
            ]);
            
            $category = new Category();
            $isCreate = true;
        } else
            $category = Category::findOrFail($request->id);

        $category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $category->image = uploadFoto($request->image, 'uploads/categories');
        }

        $category->save();

        if ($isCreate)
            return ResponseAPI($category, 200);
        else
            return ResponseAPI($category, 200);
    }
    */

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'category.id' => 'required',
        ]);
    
        // check request->id
        $isCreate = false;
        if (!$request->id) {
            
            $subCategory = new SubCategory();
            $isCreate = true;
        } else
            $subCategory = SubCategory::findOrFail($request->id);

        $subCategory->name = $request->input('name');
        $subCategory->category_id = $request->category['id'] ?? null;
        $subCategory->save();

        if ($isCreate)
            return ResponseAPI($subCategory, 200);
        else
            return ResponseAPI($subCategory, 200);
    }

    public function show(SubCategory $subCategory)
    {
        return $subCategory->load('category');
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
