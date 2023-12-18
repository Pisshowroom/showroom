<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::when($request->filled('search'), function ($query, $request) {
            return $query->where('name', 'like', '%' . $request->search . '%');
        })
            ->paginate($request->per_page ?? 10);

        return $categories;
    }

    public function allCategories()
    {
        $categories = Category::all();
        return $categories;
        // return ["A", "B"];
    }

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

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, Category $category)
    {
        // dd($request->all());
        if ($request->filled('name')) {
            $category->name = $request->input('name');
        }



        $category->save();

        return ResponseAPI('Kategori berhasil diperbarui', 200);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return ResponseAPI('Kategori berhasil dihapus', 200);
    }
}
