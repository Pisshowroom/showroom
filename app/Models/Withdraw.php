<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Withdraw extends Model
{
    use HasFactory, SoftDeletes;

    /* Status 
        Pending, OnReview, Approved, Rejected
    */
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function master_account()
    {
        return $this->belongsTo(MasterAccount::class);
    }

    public function getNextId()
    {
        $statement = DB::select("show table status like 'withdraws'");

        return $statement[0]->Auto_increment;
    }


}
