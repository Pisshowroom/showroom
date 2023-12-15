<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $admins = Admin::when($request->filled('search'), function ($query) use ($request) {
            $query->where('name', 'like', "%$request->search%");
        })->paginate($request->per_page ?? 15);

        return $admins;
    }

    public function detail(Admin $admin)
    {
        return $admin;
    }

    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins,username',
            'password' => 'required',
            'image' => 'required',
        ]);

        $dataInput = $request->all();
        $dataInput['password'] = bcrypt($request->password);
        $img = $dataInput['image'];
        if (isset($img) && is_uploaded_file($img)) {
            $dataInput['image'] = uploadFoto($img, 'uploads/products/');
        }

        $admin = Admin::create($dataInput);

        return $admin;
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'username' => 'required|unique:admins,username,' . $admin->id,
            'password' => 'required',
            'image' => 'required',
        ]);

        $dataInput = $request->all();
        $dataInput['password'] = bcrypt($request->password);
        $img = $dataInput['image'];
        if (isset($img) && is_uploaded_file($img)) {
            $dataInput['image'] = uploadFoto($img, 'uploads/products/');
        } else if (!empty($img)) {
            $dataInput['image'] = $admin->image;
        }

        $admin->update($dataInput);

        return $admin;
    }

    public function delete(Admin $admin)
    {
        $admin->delete();

        return response()->json([
            'message' => 'Admin deleted successfully',
        ]);
    }
}
