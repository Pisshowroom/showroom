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
        $user = auth()->guard('api-client')->user();

        $addresses = Address::where('user_id', $user->id)->orderByDesc('main')->get();
        // return ResponseAPI($addresses);
        return AddressResource::collection($addresses);
    }

    // storeOrUpdate
    public function storeOrUpdate(Request $request)
    {
        $id = $request->id ?? null;
        $user = auth()->guard('api-client')->user();

        $data = $request->validate([
            'ro_province_id' => 'required|exists:ro_provinces,id',
            'ro_city_id' => 'required|exists:ro_cities,id',
            'ro_subdistrict_id' => 'required|exists:ro_subdistricts,id',
            'street' => 'nullable|string',
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


        if ($id) {
            $address = Address::findOrFail($id);
            $address->update($data);
        } else {
            $data['user_id'] = $user->id;
            if ($user->addresses->count() < 1) {
                $data['main'] = true;
            }
            $address = Address::create($data);
        }

        return new AddressResource($address);
    }

    public function setMainAddress(Address $address)
    {
        $user = auth()->guard('api-client')->user();

        $user->addresses()->where('main', true)->update(['main' => false]);
        $address->update(['main' => true]);
        return new AddressResource($address);
    }

    public function destroy(Address $address)
    {
        $address->delete();
        return ResponseAPI('Address berhasil dihapus');
    }
}
