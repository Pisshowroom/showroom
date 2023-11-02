<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MasterAccountResource;
use App\Models\MasterAccount;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // return All MasterAccount using MasterAccountResource
    public function index()
    {
        $masterAccounts = MasterAccount::all();

        return MasterAccountResource::collection($masterAccounts);
    }
}
