<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        // when request filled search on name
        $categories = Category::when($request->filled('search'), function ($query, $request) {
            return $query->where('name', 'like', '%' . $request->search . '%');
        })
            ->paginate($request->per_page ?? 10);

        return $categories;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|file',
        ]);
        
        $category = new Category();
        $category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $category->image = uploadFoto($request->image, 'uploads/categories');
        }
        $category->save();

        return ResponseAPI('Kategori berhasil ditambahkan', 200);
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

        if ($request->hasFile('image')) {
            $category->image = uploadFoto($request->image, 'uploads/categories');
        } else if ($request->filled('image')) {
            $category->image = $request->image;
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
