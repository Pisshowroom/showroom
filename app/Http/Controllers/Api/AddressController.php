<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    // all addresses
    public function index()
    {
        $addresses = auth()->user()->addresses;
        // return ResponseAPI($addresses);
        return AddressResource::collection($addresses);
    }

    // storeOrUpdate
    public function storeOrUpdate(Request $request)
    {
        $id = $request->id ?? null;
        $data = $request->validate([
            'ro_province_id' => 'required|exists:ro_provinces,id',
            'ro_city_id' => 'required|exists:ro_cities,id',
            'ro_subdistrict_id' => 'required|exists:ro_subdistricts,id',
            'street' => 'nullable|string',
            'main' => 'required|boolean',
            'place_name' => 'nullable|string',
            'person_name' => 'nullable|string',
            'phone_number' => 'required',
            'village' => 'nullable|string',
            'district' => 'nullable|string',
            'city' => 'nullable|string',
            'address_text' => 'nullable|string',
            'address_description' => 'nullable|string',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ]);

        $data['user_id'] = auth()->id();

        if ($id) {
            $address = Address::findOrFail($id);
            $address->update($data);
        } else {
            $address = Address::create($data);
        }

        return new AddressResource($address);
    }

    // setMainAddress

    // destroy
}
