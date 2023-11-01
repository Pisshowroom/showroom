<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SellerController extends Controller
{

    public function isSeller()
    {
        return Auth::guard('web')->user()->is_seller == true;
    }
    public function dashboard(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.dashboard');
    }
    public function profile(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.profile');
    }
    public function allTransaction(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.transaction.all');
    }
    public function detailTransaction(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.transaction.detail');
    }
    public function addWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.withdraw.add');
    }
    public function allWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.withdraw.all');
    }
    public function detailWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.withdraw.detail');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('web')->user();

        if ($request->filled('name')) {
            $user->name = $request->name;
            $user->seller_slug = Str::slug($request->name);
        }

        if ($request->filled('seller_description')) {
            $user->seller_description = $request->seller_description;
        }

        if ($request->filled('image')) {
            $user->image = $request->image;
        }

        $user->save();

        return redirect("/toko/profil")->with('success', 'Profil toko berhasil diperbarui');
    }
}
