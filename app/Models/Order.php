<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    // protected $guarded = [];
    protected $casts = [
        'is_reviewed' => 'boolean'
    ];

    public function getNextId()
    {
        $statement = DB::select("show table status like 'orders'");

        return $statement[0]->Auto_increment;
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function product()
    {
        return $this->orderItems()->first()->product()->load('parent');
    }

    public function single_order_item_with_product()
    {
        return $this->hasOne(OrderItem::class);
    }

    public function master_account()
    {
        return $this->belongsTo(MasterAccount::class);
    }

    /*  Status
    Pending, Paid,
    ProcessedBySeller, Shipped, Delivered,
    ExpiredPayment, Cancelled, RequestedRefund, RefundAccepted, RefundDone, RefundDeclined,
    RequestedReturn, ReturnAccepted, ReturnShipped, ReturnDelivered, ReturnCompleted,
    Complain
    Completed
    */

    // Pending, Paid, Sending, Cancel, Returning, Completed
    // FIMGA SELLER : Dalam Pengiriman, Dikomplain

    /* returning_product_type
    ReturnProdukDanUang, Refund, Komplain 
    */

    /* Payment Status
    PaymentPending, PaymentPaid, PaymentCancelled, PaymentExpired
    */

    const PENDING = 'Pending';
    const PAID = 'Paid';
    const EXPIRED_PAYMENT = 'ExpiredPayment';
    const CANCELLED = 'Cancelled';
    const PROCESSED_BY_SELLER = 'ProcessedBySeller';
    const SHIPPED = 'Shipped';
    const DELIVERED = 'Delivered';
    const REQUESTED_REFUND = 'RequestedRefund';
    const REFUND_ACCEPTED = 'RefundAccepted';
    const REFUND_DONE = 'RefundDone';
    const REFUND_DECLINED = 'RefundDeclined';
    const COMPLETED = 'Completed';
    const REQUESTED_RETURN = 'RequestedReturn';
    const RETURN_DECLINED = 'ReturnDeclined';
    const RETURN_ACCEPTED = 'ReturnAccepted';
    const RETURN_SHIPPED = 'ReturnShipped';
    const RETURN_DELIVERED = 'ReturnDelivered';
    const RETURN_COMPLETED = 'ReturnCompleted';

    const COMPLAINT = 'Complain';

    /* Payment Status
    PaymentPending, PaymentPaid, PaymentCancelled, PaymentExpired
    */

    const PAYMENT_PENDING = 'PaymentPending';
    const PAYMENT_PAID = 'PaymentPaid';
    const PAYMENT_CANCELLED = 'PaymentCancelled';
    const PAYMENT_EXPIRED = 'PaymentExpired';
}
