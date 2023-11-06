<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'images' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    /* public function seller()
    {
        return $this->belongsTo(Seller::class);
    } */

    public function parent()
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }

    public function variants()
    {
        return $this->hasMany(Product::class, 'parent_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    protected static function booted()
    {
        static::addGlobalScope('hasParentRelation', function (Builder $builder) {
            $builder->whereNull('parent_id');
        });
    }

}
