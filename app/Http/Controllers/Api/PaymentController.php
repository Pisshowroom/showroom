<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MasterAccountResource;
use App\Models\MasterAccount;
use Illuminate\Http\Request;
use Xendit\Xendit;

class PaymentController extends Controller
{
    public function index()
    {
        
        
        // $masterAccounts = MasterAccount::all();
        $masterAccounts = MasterAccount::whereIn('type', ['Virtual-Account', 'E-Wallet', 'Retail-Outlet'])
        // $masterAccounts = MasterAccount::whereIn('type', ['Retail-Outlet'])
        ->orderBy('type')
        ->get();

        return MasterAccountResource::collection($masterAccounts);
    }
}
