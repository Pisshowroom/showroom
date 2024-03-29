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

    protected $fillable = ['name', 'price', 'images', 'discount', 'slug', 'parent_id', 'stock'];    
    // protected $fillable = ['name', 'description', 'price', 'quantity', 'images', 'discount', 'category_id', 'sub_category_id', 'seller_id', 'parent_id'];    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function usersWishlisted()
    {
        return $this->belongsToMany(User::class, 'wishlists', 'product_id', 'user_id');
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

    public function scopeByNotVariant($query)
    {
        return $query->whereNull('parent_id');
    }

    public function getPriceAttribute($value)
    {
        // Remove non-numeric characters and convert to integer
        return (int) preg_replace("/[^0-9]/", "", $value);
    }

    // protected static function booted()
    // {
    //     static::addGlobalScope('hasParentRelation', function (Builder $builder) {
    //         $builder->whereNull('parent_id');
    //     });
    // }

}
