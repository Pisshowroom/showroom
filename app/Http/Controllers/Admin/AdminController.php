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
            $query->where(function($query) use ($request) {
                $query->where('name', 'like', "%{$request->search}%")
                    ->orWhere('username', 'like', "%{$request->search}%");
            });
        })->paginate($request->per_page ?? 15);

        return $admins;
    }

    public function detail(Admin $admin)
    {
        return $admin->makeHidden(["password"]);
    }

    public function store(Request $request)
    {
        $editMode = $request->has('id');
        $admin = $editMode ? Admin::findOrFail($request->id) : new Admin;

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:admins,username' . ($editMode ? ',' . $admin->id : ''),
            'password' => $editMode ? 'sometimes' : 'required',
            'image' => 'required',
        ]);

        $dataInput = $request->all();
        /* if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8',
                'confirmation_password' => 'required|string|min:8',
            ]);

            if ($request->password != $request->confirmation_password) {
                return response()->json([
                    'message' => 'Password dan Konfirmasi Password tidak sama',
                ], 422);
            }
            $dataInput['password'] = bcrypt($request->password);
        } */

        
        if ($request->filled('password')) {
            $dataInput['password'] = bcrypt($request->password);
        }

        $img = $dataInput['image'];
        if (isset($img) && is_uploaded_file($img)) {
            $dataInput['image'] = uploadFoto($img, 'uploads/admins/');
        } else if ($editMode && !empty($img)) {
            $dataInput['image'] = $admin->image;
        }

        $admin->fill($dataInput);
        $admin->save();

        // return ResponseAPI($editMode ? "Admin updated successfully" : "Admin created successfully");
        return ResponseAPI("No Content", 204);
    }

   /*  public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:admins,username',
            'password' => 'required',
            'image' => 'required',
        ]);

        $dataInput = $request->all();
        $dataInput['password'] = bcrypt($request->password);
        $img = $dataInput['image'];
        if (isset($img) && is_uploaded_file($img)) {
            $dataInput['image'] = uploadFoto($img, 'uploads/admins/');
        }

        $admin = Admin::create($dataInput);

        return $admin;
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:admins,username,' . $admin->id,
            'password' => 'required',
            'image' => 'required',
        ]);

        $dataInput = $request->all();
        $dataInput['password'] = bcrypt($request->password);
        $img = $dataInput['image'];
        if (isset($img) && is_uploaded_file($img)) {
            $dataInput['image'] = uploadFoto($img, 'uploads/admins/');
        } else if (!empty($img)) {
            $dataInput['image'] = $admin->image;
        }

        $admin->update($dataInput);

        return $admin;
    }
 */
    public function delete(Admin $admin)
    {
        $admin->delete();

        return response()->json([
            'message' => 'Admin deleted successfully',
        ]);
    }
}
